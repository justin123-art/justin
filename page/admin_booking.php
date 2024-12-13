<?php
	//import model
    include '../model/admin_model.php';
	
	$page_info['page'] = 'booking'; //for page that needs to be called
	$page_info['sub_page'] = isset($_GET['sub_page'])? $_GET['sub_page'] : 'booking'; //for function to be loaded
		
	//-----------------------//
	//--  validate contact  --//
	//-----------------------//
	session_start();
	try {//used try to catch unfortunate errors
		//check for active function
		if (isset($_GET['function'])){
			new bookingActive($page_info);
		}else{			
			//no active function, use the default page to view
			new  booking($page_info);
		}
		
		
	}catch (Throwable $e){ //get the encountered error
		echo '<h1>ERROR 404</h1>';
		echo $e->getMessage();
	}//end of validation
	
	
	//-----------------------//
	//--  Class Navigation --//
	//-----------------------//
	class booking{
		//set default page info
		private $page = '';
		private $sub_page = '';
		
		//run function construct
		function __construct($page_info){
			//assign page info
			$this->page = $page_info['page'];
			$this->sub_page = $page_info['sub_page'];
			
			//run the function
			$this->{$page_info['sub_page']}();
		}
		
		//-----------------------------//
		//--   function start here   --//
		function booking(){
			//instanciate model
			$admin = new AdminModel();
			
			$bookingInfo = $admin->getBookingInfo();

			include '../views/booking.php';
		}
		
	}

	class bookingActive{
		//set default page info
		private $page = '';
		private $sub_page = '';
		
		//run function construct
		function __construct($page_info){
			//assign page info
			$this->page = $page_info['page'];
			$this->sub_page = $page_info['sub_page'];
			
			//run the function
			$this->{$page_info['sub_page']}();
		}
		
		//-----------------------------//
		//--   function start here   --//
		function editbooking(){
			//instanciate model
			$admin = new AdminModel();
			
			$editbooking = $admin->editbooking($_GET);
			
			$bookingInfo = $admin->getBookingInfo();

			include '../views/booking.php';
		}

		function addbooking(){
			// Instantiate model
			$admin = new AdminModel();
			
			// Use POST data for adding booking
			$addbooking = $admin->addbooking($_POST);
			
			// Retrieve booking info to show in the view
			$bookingInfo = $admin->getBookingInfo();
		
			include '../views/booking.php';
		}

		function deleteBooking(){
			//instanciate model
			$admin = new AdminModel();
			
			$deleteBooking = $admin-> deleteBooking($_GET);
			
			$bookingInfo = $admin->getBookingInfo();

			include '../views/booking.php';
		}
	}
	
	
?>