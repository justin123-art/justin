<?php
	//import model
	include_once '../model/admin_model.php';

	$page_info['page'] = 'admin_services'; //for page that needs to be called
	$page_info['sub_page'] = isset($_GET['sub_page'])? $_GET['sub_page'] : 'admin_services'; //for function to be loaded
		
	//-----------------------//
	//--  validate contact  --//
	//-----------------------//
		try {//used try to catch unfortunate errors
		//check for active function
		
		//no active function, use the default page to view
		if(isset($_GET['function'])){
			
			new admin_servicesActive($page_info);
		}else{

			new admin_services($page_info);
		}
		
	}catch (Throwable $e){ //get the encountered error
		echo '<h1>ERROR 404</h1>';
		echo $e->getMessage();
	}//end of validation
	
	
	//-----------------------//
	//--  Class Navigation --//
	//-----------------------//
	class admin_services{
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
		function admin_services(){
			$admin = new AdminModel();

			$services = $admin->get_service();

			include '../views/admin_services.php';
		}

	}

	class admin_servicesActive{
		

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

	function addService(){

        $admin = new AdminModel();

		$service = $admin->add_Service($_POST,$_FILES);
		
		$services = $admin->get_service();
        

		
		include '../views/admin_services.php';
	}


	function services_delete(){

        $admin = new AdminModel();
		

		$delete_service = $admin->service_delete($_GET);

		$services = $admin->get_service();

		include '../views/admin_services.php';
	}

}

	function services_update(){

        $admin = new AdminModel();

	$update_service = $admin->service_update($_GET);

	$services = $admin->get_service();

	include '../views/admin_services.php';
}
 
function services(){
    $admin = new AdminModel();
	


    $services = $admin->get_service();
	
	
	include '../views/admin_services.php';
}


?>