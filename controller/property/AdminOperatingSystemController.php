<?php 
include_once('model/Admin/OperatingSystem.php');
class AdminOperatingSystemController{
	var $model_operating_system;
	function __construct(){
		$this->model_operating_system = new OperatingSystem();
	}
 	function T_list(){
 		unset($_SESSION['value_old']);
 		$data = $this->model_operating_system->T_list();
 		include_once('view/operating_system/ListOperatingSystem.php');
 	}
 	function add(){
 		include_once('view/operating_system/AddOperatingSystem.php');
 	}
 	function check_add($data){
 		$check_code = $this->model_operating_system->find($data['code']);

 		if($check_code){
 			setcookie('code_same','abc',time()+1);
 			return false;
 		}

 		return true;
 	}
 	function store(){
 		$data = $_POST;
 		if($this->check_add($data)){
	 		
	 		$status = $this->model_operating_system->create($data);
	 		if($status){
	 			setcookie('true','abc',time()+1);
	 		}else{
	 			setcookie('false','abc',time()+1);
	 		}
	 		header('location: ?role=admin&mod=operating_system&act=T_list');
	 	}else{
	 		$_SESSION['value_old'] = $data;	
 			header('location: ?role=admin&mod=operating_system&act=add');
	 	}
 		
 	}
 	function edit(){
 		$code = $_GET['code'];
 		$data = $this->model_operating_system->find($code);
 		include_once('view/operating_system/EditOperatingSystem.php');
 	}
 	function update(){
 		$data = $_POST;
 		
 		$s = $this->model_operating_system->update($data);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=operating_system&act=T_list');
 		
 	}
 	function delete(){
 		$code = $_GET['code'];
 		$s = $this->model_operating_system->delete($code);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=operating_system&act=T_list');
 		
 	}
}

?>