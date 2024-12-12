<?php
	//import database connector
	require_once 'connector.php';
	
	//-------------------------------//
	//--class for login page active--//
	//-------------------------------//
	class AdminModel extends Connector{
		function __construct(){
			parent::__construct();
			
		}
		
		
		function getService(){
			//prepare the sql
			$sql = "SELECT * FROM service_tb";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		function getUser(){
			//prepare the sql
			$sql = "SELECT * FROM user_tb";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		
		
		function getFeeds(){
			//prepare the sql
			$sql = "SELECT * FROM feedback_tb";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function getBookings(){
			//prepare the sql
			$sql = "SELECT * FROM booking_tb";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		function getContactInfo()
			{
				$query = "SELECT * FROM contact_tb";
				$stmt = $this->conn->prepare($query);
				$stmt->execute();
				return $stmt->fetchAll();
			}
			function getBookingInfo()
			{
				$query = "SELECT * FROM booking_tb";
				$stmt = $this->conn->prepare($query);
				$stmt->execute();
				return $stmt->fetchAll();
			}
		
			function deleteBooking($get){
				//prepare the sql
				$sql = "DELETE FROM booking_tb WHERE book_id = '{$get['id']}'";
				//prepare query
				$query = $this->conn->prepare($sql);
				
				//execute query
				$query->execute();
				//return
				return $query->fetchAll(PDO::FETCH_ASSOC);
			}
				
		
		
		
		//-------------------------------//
		//--  function starts here      --//
		function addProvince($post){
			//prepare the sql
			$sql = "INSERT INTO `province_tb`(`prov_name`) 
									  VALUES ('{$post['name']}')";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetch(PDO::FETCH_ASSOC);
		}
		function updateProv(){
		
			$sql = "UPDATE `province_tb` SET `prov_name` = '{$_POST['prov_name']}' WHERE `prov_id` = '{$_GET['id']}';";

			$query = $this->conn->prepare($sql);

			$query->execute();

			return true;
			
		}
		
		function getProvince(){
			//prepare the sql
			$sql = "SELECT * FROM province_tb";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function deleteProvince($get){
			//prepare the sql
			$sql = "DELETE FROM province_tb WHERE prov_id = '{$get['id']}'";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function getMunicipality(){
			//prepare the sql
			$sql = "SELECT * FROM municipality_tb JOIN province_tb ON prov_id = mncp_prov_id";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function addMunicipality($post){
			//prepare the sql
			$sql = "INSERT INTO `municipality_tb`(`mncp_prov_id`, `mncp_name`) 
									  VALUES ('{$post['prov_id']}', '{$post['name']}')";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetch(PDO::FETCH_ASSOC);
		}
		
		function deleteMunicipality($get){
			//prepare the sql
			$sql = "DELETE FROM municipality_tb WHERE mncp_id = '{$get['id']}'";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function getBarangay(){
			//prepare the sql
			$sql = "SELECT * FROM barangay_tb JOIN municipality_tb ON mncp_id = brgy_mncp_id JOIN province_tb ON prov_id = mncp_prov_id";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function deleteBarangay($get){
			//prepare the sql
			$sql = "DELETE FROM barangay_tb WHERE brgy_id = '{$get['id']}'";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function addBarangay($post){
			//prepare the sql
			$sql = "INSERT INTO barangay_tb SET brgy_mncp_id = '{$post['mncp_id']}', brgy_name = '{$post['name']}'";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function tourDest($post, $file){
			//image location
			$target_dir = "../images/";
			
			$target_file = $target_dir . basename($file["logo"]["name"]);
			$filename = basename($file["logo"]["name"]);
			
			$imageFileType = ['jpg','jpeg','png','svg','gif','webp'];
			
			//check te file if it is an image
			$extension = pathinfo($file["logo"]["name"], PATHINFO_EXTENSION);
			
			//check if file is an image
			if (in_array($extension, $imageFileType)){
				//check if file is uploaded
				if (move_uploaded_file($file["logo"]["tmp_name"], $target_file)){
					//prepare sql query
					$sql= "INSERT INTO `td_tb`(`td_brgy_id`, `td_name`, `td_description`, `td_logo`) 
									   VALUES (?,?,?,?)";
					//prepare query
					$query = $this->conn->prepare($sql);
					$query->bindParam(1, $post['brgy_id']);
					$query->bindParam(2, $post['dest']);	
					$query->bindParam(3, $post['desc']);	
					$query->bindParam(4, $filename);	
					$query->execute();
					//return
					return $query->fetch(PDO::FETCH_ASSOC);
					
				}else{
					//go back to previous page
					echo "<script>alert('Invalid image upload!');</script>";
					echo "<script>window.history.back(-1);</script>";
			}
				
			}else{
				//go back to previous page
				echo "<script>window.history.back(-1);</script>";
			}
		}
		
		function getDestination(){
			//prepare the sql
			$sql = "SELECT * FROM td_tb 
								  JOIN barangay_tb ON brgy_id = td_brgy_id 
								  JOIN municipality_tb ON mncp_id = brgy_mncp_id 
								  JOIN province_tb ON prov_id = mncp_prov_id";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function deleteDest($get){
			//prepare the sql
			$sql = "DELETE FROM td_tb WHERE td_id = '{$get['id']}'";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
		
		function contact(){
			//prepare the sql
			$sql = "SELECT * FROM contact_tb";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
	}
?>