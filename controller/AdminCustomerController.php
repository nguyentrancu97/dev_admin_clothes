<?php 
include_once('model/Admin/Customer.php');

class AdminCustomerController{
	var $model_customer;
	
	function __construct(){
		$this->model_customer = new Customer();
		
	}
 	function T_list(){
 		$data = $this->model_customer->T_list();
 		include_once('view/customer/ListCustomer.php');
 	}
 	function add(){
 		include_once('view/customer/AddCustomer.php');
 	}
 	function store(){
 		$data = $_POST;

 		$status = $this->model_customer->create($data);
 		if($status){
 			header('location: ?role=admin&mod=customer&act=T_list');
 		}
 	}
 	function edit(){
 		$id = $_GET['customer_id'];
 		$data = $this->model_customer->find($id);
 		include_once('view/customer/EditCustomer.php');
 	}
 	function update(){
 		$data = $_POST;
 		// echo "<pre>";
 		// print_r($data);
 		// die;
 		$s = $this->model_customer->update($data);
 		if($s){
 			header('location: ?role=admin&mod=customer&act=T_list');
 		}
 	}
 	function delete(){
 		$customer_id = $_GET['customer_id'];
 		$s = $this->model_customer->delete($customer_id);
 		if($s){
 			header('location: ?role=admin&mod=customer&act=T_list');
 		}
 	}
}

?>