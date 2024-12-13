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
			function getproductInfo()
			{
				$query = "SELECT * FROM product_tb";
				$stmt = $this->conn->prepare($query);
				$stmt->execute();
				return $stmt->fetchAll();
			}
			  function add_Service($service, $file){
            	//image location
			$target_dir = "../images/";
			$target_file = $target_dir . basename($file["image"]["name"]);
			$filename = basename($file["image"]["name"]);
			
			$imageFileType = ['jpg','jpeg','png','svg','gif','webp'];
			
			//check te file if it is an image
			$extension = pathinfo($file["image"]["name"], PATHINFO_EXTENSION);
			
			//check if the image is on the list of images formats
			if (in_array($extension,$imageFileType)){
				
				//upload the correct image
				if (move_uploaded_file($file["image"]["tmp_name"], $target_file)) {
					//pre sql statement
                    $sql = "INSERT INTO `service_tb`(`serv_name`,`serv_img`,`serv_desc`,`serv_price`) VALUES (?, ?, ?, ?)";

                    $query = $this->conn->prepare($sql);
        
                    $query->bindParam(1, $service['name']);
                    $query->bindParam(2,$filename);
                    $query->bindParam(3, $service['desc']);
                    $query->bindParam(4, $service['prices']);
        
                    $query->execute();
					
				}
				else{
					?>
						<script>alert('There was an error on file upload!');</script>
						<script>window.history.back(-1);</script>
					<?php
				}
			}else{
				?>
					<script>alert('Invalid File Format.\r\nFormat: jpg,jpeg,png,svg,gif extention:'<?= $extension ?>);</script>
					<script>window.history.back(-1);</script>
				<?php
			}
			
       
        }
		function service_delete($service_delete){
			$sql = "DELETE FROM `service_tb` WHERE `serv_id` = ?";
			$query = $this->conn->prepare($sql);
			$query->bindParam(1, $service_delete['serv_id']);
			$query->execute();
			$query->fetchAll(PDO::FETCH_ASSOC);
		}
		

        function get_service(){
            $sql = "SELECT * FROM `service_tb` ";
			//prepare query
			$query = $this->conn->prepare($sql);
			
			//execute query
			$query->execute();
			//return
			return $query->fetchAll(PDO::FETCH_ASSOC);
        }


		function service_update(){
			try{
				$query = "UPDATE `service_tb` SET `services_name` = '{$_POST['services_name_input']}', `services_description` = '{$_POST['services_description_input']}' WHERE `services_id` = '{$_POST['services_id']}'";
	
				$stmt = $this->conn->prepare($query);
	
				$stmt->execute();
	
				return true;
				} catch(Throwable $e){
					$e->getMessage();
					return false;
				}

		}
	}
    

		
?>