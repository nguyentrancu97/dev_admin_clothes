<?php 
include_once('model/Admin/Product.php');
include_once('model/Admin/Color.php');
include_once('model/Admin/Branch.php');
include_once('model/Admin/ScreenSize.php');
include_once('model/Admin/Cpu.php');
include_once('model/Admin/OperatingSystem.php');
include_once('model/Admin/Ram.php');
include_once('model/Admin/Status.php');
include_once('model/Admin/Type.php');
class AdminProductController{
	var $model_product;
	var $model_screen_size;
	var $model_color;
	var $model_branch;
	var $model_cpu;
	var $model_operating_system;
	var $model_ram;
	var $model_status;
	var $model_type;
	function __construct(){
		$this->model_product = new Product();
		$this->model_color = new Color();		
		$this->model_screen_size = new ScreenSize();		
		$this->model_branch = new Branch();		
		$this->model_cpu = new Cpu();		
		$this->model_operating_system = new OperatingSystem();		
		$this->model_ram = new Ram();		
		$this->model_status = new Status();		
		$this->model_type = new Type();		
	} 
	function T_list(){
		unset($_SESSION['value_old']);
		$data = $this->model_product->ListProduct();
 		include_once('view/product/ListProduct.php');
 	}
 	function detail(){
 		$product_id = $_GET['id'];
 		$data_product = $this->model_product->ProductDetail($product_id);
 		// var_dump($data_product);
 		// die;
 		include_once('view/product/Detail.php'); 
 	}
 	function add(){
 		$color = $this->model_color->T_list();
 		$screen_size = $this->model_screen_size->T_list();
 		$branch = $this->model_branch->T_list();
 		$cpu = $this->model_cpu->T_list();
 		$operating_system = $this->model_operating_system->T_list();
 		$ram = $this->model_ram->T_list();
 		$status = $this->model_status->T_list();
 		$type = $this->model_type->T_list();
 		include_once('view/product/AddProduct.php');
 	}
 	function check_add($data){
 		
 		$check_code = $this->model_product->findByCode($data['code']);
 		
 		if($check_code){
 			setcookie('code_same','abc',time()+1);
 			return false;
 		}
 		return true;
 	}
 	function store(){
 		$data = $_POST;

 		if($this->check_add($data)){
 			$data['created_date'] = Date('Y-m-d H:i:s');
	 		if(isset($_FILES['image'])){
	 			$data['image'] = $_FILES['image']['name'];
	 			move_uploaded_file($_FILES['image']['tmp_name'],"public/images/uploads/".$_FILES['image']['name']);
	 			$status = $this->model_product->create($data);
	 			if($status){
	 				setcookie('true','abc',time()+1);
	 			}else{
	 				setcookie('false','abc',time()+1);
	 			}
	 			header('location: ?role=admin&mod=product&act=T_list');
	 		}
 		}else{
 			setcookie('code_same','abc',time()+1);

 			$_SESSION['value_old'] = $data;
 			// var_dump($_SESSION['value_old']);
 			// 	die;
 			header('location: ?role=admin&mod=product&act=add');
 		}
 		
 	}

 	function edit(){
 		$id = $_GET['id'];
 		$row = $this->model_product->find($id);
 		$color = $this->model_color->T_list();
 		$screen_size = $this->model_screen_size->T_list();
 		$branch = $this->model_branch->T_list();
 		$cpu = $this->model_cpu->T_list();
 		$operating_system = $this->model_operating_system->T_list();
 		$ram = $this->model_ram->T_list();
 		$status = $this->model_status->T_list();
 		$type = $this->model_type->T_list();
 		include_once('view/product/EditProduct.php');
 	}

 	function update(){
 		$data = $_POST;

 		if($_FILES['image']['error']!= 4){
 			$data['image'] = $_FILES['image']['name'];
 			move_uploaded_file($_FILES['image']['tmp_name'],"public/images/uploads/".$_FILES['image']['name']);
 			
 			$s = $this->model_product->update($data);
 			if($s){
 				setcookie('true','abc',time()+1);
 			}else{
 				setcookie('false','abc',time()+1);
 			}
 			header('location: ?role=admin&mod=product&act=T_list');
 		}else{
 			
 			$s = $this->model_product->update($data);

 			if($s){
 				setcookie('true','abc',time()+1);
 			}else{
 				setcookie('false','abc',time()+1);
 			}
 			header('location: ?role=admin&mod=product&act=T_list');
 		}
 			
 	}
 	
 	function delete(){
 		$product_id = $_GET['id'];
 		$status = $this->model_product->delete($product_id);
 		// var_dump($status);
 		// die;
 		if($status){
 				setcookie('true','abc',time()+1);
 			}else{
 				setcookie('false','abc',time()+1);
 			}
 		header('location: ?role=admin&mod=product&act=T_list');
 	}


}

?>