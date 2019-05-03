<?php 
include_once('model/Admin/Role.php');
class AdminRoleController{
	var $model_role;
	function __construct(){
		$this->model_role = new Role();
	}
 	function T_list(){
 		unset($_SESSION['value_old']);
 		$data = $this->model_role->T_list();
 		include_once('view/role/ListRole.php');
 	}
 	function add(){
 		
 		include_once('view/role/AddRole.php');
 	}
 	function check_add($data){
 		$check_code = $this->model_role->find($data['code']);

 		if($check_code){
 			setcookie('code_same','abc',time()+1);
 			return false;
 		}

 		return true;
 	}
 	function store(){
 		$data = $_POST;
 		if($this->check_add($data)){
	 		
	 		$status = $this->model_role->create($data);
	 		if($status){
	 			setcookie('true','abc',time()+1);
	 		}else{
	 			setcookie('false','abc',time()+1);
	 		}
	 		header('location: ?role=admin&mod=role&act=T_list');
	 	}else{
	 		$_SESSION['value_old'] = $data;	
 			header('location: ?role=admin&mod=role&act=add');
	 	}
 		
 	}
 	function edit(){
 		$code = $_GET['code'];
 		$data = $this->model_role->find($code);
 		include_once('view/role/EditRole.php');
 	}
 	function update(){
 		$data = $_POST;

 		
 		$s = $this->model_role->update($data);
 		// var_dump($s);
 		// die;
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=role&act=T_list');
 	}
 	function delete(){
 		$code = $_GET['code'];
 		$s = $this->model_role->delete($code);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=role&act=T_list');
 	}
}
