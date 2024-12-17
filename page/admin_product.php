<?php
	//import model
include '../model/admin_model.php';
	
	
	$page_info['page'] = 'product'; //for page that needs to be called
	$page_info['sub_page'] = isset($_GET['sub_page'])? $_GET['sub_page'] : 'product'; //for function to be loaded
		
	//-----------------------//
	//--  validate contact  --//
	//-----------------------//
	try {//used try to catch unfortunate errors
		//check for active function
		
		//no active function, use the default page to view
		if(isset($_GET['function'])){
			
			new productActive($page_info);
		}else{

			new product($page_info);
		}
		
	}catch (Throwable $e){ //get the encountered error
		echo '<h1>ERROR 404</h1>';
		echo $e->getMessage();
	}//end of validation
	
	
	//-----------------------//
	//--  Class Navigation --//
	//-----------------------//
	class product{
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
		function product(){
			$admin = new AdminModel();

			$product = $admin->get_product();
			

			include '../views/admin_product.php';
		}

	}

	class productActive{
		

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

	function addProduct(){

        $admin = new AdminModel();

		$product = $admin->add_product($_POST,$_FILES);
		
		$product= $admin->get_product();
        

		
		include '../views/admin_product.php';
	}


	function product_delete(){

        $admin = new AdminModel();
		

		$delete_product = $admin->product_delete($_GET);

		$product = $admin->get_product();

		include '../views/admin_product.php';
	}

}

	function  products_update(){

        $admin = new AdminModel();

	$update_product = $admin-> product_update($_GET);

	$product = $admin->get_product();

	include '../views/admin_product.php';
}
 
function product(){
    $admin = new AdminModel();
	


    $product = $admin->get_product();
	
	
	include '../views/admin_ product.php';
}


?>