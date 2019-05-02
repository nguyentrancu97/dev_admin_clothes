<?php 
include_once('model/Admin/Customer.php');

class AdminCustomerController{
	var $model_customer;
	
	function __construct(){
		$this->model_customer = new Customer();
		
	}
 	function T_list(){
 		unset($_SESSION['value_old']);
 		$data = $this->model_customer->T_list();
 		include_once('view/customer/ListCustomer.php');
 	}
 	function add(){
 		include_once('view/customer/AddCustomer.php');
 	}
 	function check_add($data){
 		$check_code = $this->model_customer->find($data['code']);

 		if($check_code){
 			setcookie('code_same','abc',time()+1);
 			return false;
 		}

 		$check_email = $this->model_customer->check_email_add($data);
 		if($check_email){
 			setcookie('email_same','abc',time()+1);
 			return false;
 		}

 		$check_phone = $this->model_customer->check_phone_add($data);
 		if($check_phone){
 			setcookie('phone_same','abc',time()+1);
 			return false;
 		}

 		return true;
 	}
 	function store(){
 		$data = $_POST;
 		$data['password'] = md5($_POST['password']);
 		if($this->check_add($data)){
 		
 		$status = $this->model_customer->create($data);
 		if($status){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=customer&act=T_list');
 		}else{
 			$_SESSION['value_old'] = $_POST;	
 			header('location: ?role=admin&mod=customer&act=add');
 		}

 	}
 	function edit(){
 		$code = $_GET['code'];
 		$data = $this->model_customer->find($code);
 		include_once('view/customer/EditCustomer.php');
 	}
 	function check_edit($data){

 		$check_email = $this->model_customer->check_email_edit($data);
 		if($check_email){
 			setcookie('email_same','abc',time()+1);
 			return false;
 		}

 		$check_phone = $this->model_customer->check_phone_edit($data);
 		if($check_phone){
 			setcookie('phone_same','abc',time()+1);
 			return false;
 		}

 		return true;
 	}
 	function update(){
 		$data = $_POST;
 		if($this->check_edit($data)){
 		
 		$s = $this->model_customer->update($data);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=customer&act=T_list');
 		}else{
 			header('location: ?role=admin&mod=customer&act=edit&code='.$data['code'].' ');
 		}
 	}
 	function delete(){
 		$code = $_GET['code'];
 		$s = $this->model_customer->delete($code);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=customer&act=T_list');
 			
 	
 	}
}

?>