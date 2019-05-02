<?php 
include_once('model/Admin/Type.php');
class AdminTypeController{
	var $model_type;
	function __construct(){
		$this->model_type = new Type();
	}
 	function T_list(){
 		unset($_SESSION['value_old']);
 		$data = $this->model_type->T_list();
 		include_once('view/type/ListType.php');
 	}
 	function add(){
 		
 		include_once('view/type/AddType.php');
 	}
 	function check_add($data){
 		$check_code = $this->model_type->find($data['code']);

 		if($check_code){
 			setcookie('code_same','abc',time()+1);
 			return false;
 		}

 		return true;
 	}

 	function store(){
 		$data = $_POST;
 		if($this->check_add($data)){
	 		
	 		$status = $this->model_type->create($data);
	 		if($status){
	 			setcookie('true','abc',time()+1);
	 		}else{
	 			setcookie('false','abc',time()+1);
	 		}
	 		header('location: ?role=admin&mod=type&act=T_list');
	 	}else{
	 		$_SESSION['value_old'] = $data;	
 			header('location: ?role=admin&mod=type&act=add');
	 	}
 		
 	}
 	function edit(){
 		$code = $_GET['code'];
 		$data = $this->model_type->find($code);
 		include_once('view/type/EditType.php');
 	}
 	function update(){
 		$data = $_POST;

 		
 		$s = $this->model_type->update($data);
 		// var_dump($s);
 		// die;
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=type&act=T_list');
 	}
 	function delete(){
 		$code = $_GET['code'];
 		$s = $this->model_type->delete($code);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=type&act=T_list');
 	}
}
