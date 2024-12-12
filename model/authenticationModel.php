<?php
	//import database connector
	require_once 'connector.php';
	
	//-------------------------------//
	//--class for login page active--//
	//-------------------------------//
	class authenticationModel extends Connector{
		function __construct(){
			parent::__construct();
		}
		
		//-------------------------------//
		//--  function starts here      --//
		function authenticationLogin($post){
			//prepare the sql
			$sql = "SELECT * FROM `user_tb` WHERE user_email = ? and user_password = ?";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//bind the query parameter
			$query->bindParam(1, $post['email']);
			$query->bindParam(2, $post['password']);
			//execute query
			$query->execute();
			//return
			return $query->fetch(PDO::FETCH_ASSOC);
		}
		function register($data){//register
			$query = "INSERT INTO `user_tb`(`user_name`, `user_email`, `user_password`) 
									VALUES (:name, :email, :password)";
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':name', $data['name']);
			$stmt->bindParam(':email', $data['email']);
			$stmt->bindParam(':password', $data['password']);
			$stmt->execute();
		}
		
	}
?>