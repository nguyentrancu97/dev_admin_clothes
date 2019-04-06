<?php 
include_once('model/Admin/Product.php');
include_once('model/Admin/Producer.php');
include_once('model/Admin/Category.php');
include_once('model/Admin/ProductDetail.php');
include_once('model/Admin/Size.php');
include_once('model/Admin/Color.php');
class AdminProductController{
	var $model_product;
	var $model_producer;
	var $model_category;
	var $model_product_detail;
	var $model_size;
	var $model_color;
	function __construct(){
		$this->model_product = new Product();
		$this->model_producer = new Producer();
		$this->model_category = new Category();
		$this->model_product_detail = new ProductDetail();
		$this->model_size = new Size();
		$this->model_color = new Color();		
	} 	
	function T_list(){
		$data = $this->model_product->ListProduct();
 		include_once('view/product/ListProduct.php');
 	}
 	function ShowAddProduct(){
 		$producer = $this->model_producer->T_list();
 		$category = $this->model_category->T_list();
 		include_once('view/product/AddProduct.php');
 	}
 	function check_add($data){
 		
 		$product = $this->model_product->T_list();
 		
 		foreach ($product as $key => $value) {
 			if($value['product_code'] === $data['product_code']){
 				return false;
 			}
 		}
 		return true;
 	}
 	function store(){
 		$_SESSION['data'] = $_POST;
 		$status = $this->check_add($_POST);
 		if($status == false){
 			setcookie('false','abc',time()+2);
 			header('location: ?role=admin&mod=product&act=add');
 		}else{
 			unset($_SESSION['data']);
 			$status = "";
 			
 			if($_FILES['img']['error'] !==4){ 
 				$target_dir = "public/images/uploads/"; 
 				$target_file = $target_dir . basename($_FILES["img"]["name"]);

 				if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {

 					$data = $_POST;
 					$data['created_at'] = Date('Y-m-d H:i:s');
 					$data['img'] = $_FILES['img']['name'];
 					$status = $this->model_product->create($data);

 				}else{
 					echo "Sorry, there was an error uploading your file.";
 				}
 			}else{
 				
 				$data = $_POST;
 				$data['created_at'] = Date('Y-m-d H:i:s');
 				$status = $this->model_product->create($data);
 			}
 			if($status){
 				setcookie('true','abc',time()+1);
 				unset($_SESSION['data']);
 				header('Location:?role=admin&mod=product&act=T_list');
 			}else{
 				setcookie('false','abc',time()+1);
 			}

 		}
 		
 	}

 	function ShowEditProduct(){
 		$id = $_GET['id'];
 		$row = $this->model_product->find($id);
 		$producer = $this->model_producer->T_list();
 		$category = $this->model_category->T_list();
 		include_once('view/product/EditProduct.php');
 	}

 	function update(){

 		if($_SERVER['REQUEST_METHOD'] == 'POST') {
 			$status="";
			if($_FILES['img']['error'] !==4){ 
	       		$target_dir = "public/images/uploads/"; 
	        	$target_file = $target_dir . basename($_FILES["img"]["name"]);
	        
	        	move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
	        	$data = array();
	        	$data = $_POST;
	        	$data['updated_at'] = Date('Y-m-d H:i:s');
	        	$data['img'] = $_FILES['img']['name'];
	        	// var_dump($data);
	        	$status = $this->model_product->update($data);
	        	// var_dump($status);
	        	// die;
	        }else{
   	 			$data = $_POST; 
   	 			$data['updated_at'] = Date('Y-m-d H:i:s');
		        $status = $this->model_product->update($data);
		    }

		    if($status){
		    	setcookie('true','abc',time()+1);
		    	header('Location:?role=admin&mod=product&act=T_list');
		    }else{
		    	setcookie('false','abc',time()+1);
		    }

		}	
 	}
 	function ListSizeColor(){
 		$product_id = $_GET['product_id'];
 		$data = $this->model_product_detail->FindByIDProduct($product_id);
 		include_once("view/product/ListSizeColor.php");
 	}
 	function EditSizeColor(){
 		$id = $_GET['id'];
 		$row = $this->model_product_detail->find($id);
 		$color = $this->model_color->T_list();
 		$size = $this->model_size->T_list();
 		include_once('view/product/EditSizeColor.php');
 	}
 	function update_size_color(){
 		$data = $_POST;
 		$data['updated_at'] = Date('Y-m-d H:i:s');
 		$status = $this->model_product_detail->update($data);
 		if($status){
 			header('location: ?role=admin&mod=product&act=list_size_color&product_id='.$data['product_id'].' ');
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		
 	}
 	function delete(){
 		$product_id = $_GET['id'];
 		$status = $this->model_product->delete($product_id);
 		if($status){
 			header('location: ?role=admin&mod=product&act=T_list');
 		}else{
 			echo "error";
 		}
 	}
 	function detail(){
 		$product_id = $_GET['id'];
 		$data_product = $this->model_product->find($product_id);
 		$data_size_color = $this->model_product_detail->FindByIDProduct($product_id);
 		
 		$total_quantity=0;
 		foreach ($data_size_color as $key => $value) {
 				$total_quantity += $value['quantity'];
 		}

 		include_once('view/product/Detail.php'); 
 	}

 	function add_size_color(){
 		$product_id = $_GET['product_id'];
 		$color = $this->model_color->T_list();
 		$size = $this->model_size->T_list();
 		include_once('view/product/AddSizeColor.php');
 	}
 	function store_size_color(){
 		$data = $_POST;
 		$data['created_at'] = Date('Y-m-d H:i:s');
 		$result = $this->model_product_detail->create($data);
 		if($result){
 			header('location: ?role=admin&mod=product&act=list_size_color&product_id='.$data['product_id'].' ');
 		}
 	}
 	function delete_size_color(){
 		$id = $_GET['id'];
 		$product_id = $_GET['product_id'];
 		$status = $this->model_product_detail->delete($id);
 		if($status){
 			header('location: ?role=admin&mod=product&act=list_size_color&product_id='.$product_id.' ');
 		}
 	}
}

?>