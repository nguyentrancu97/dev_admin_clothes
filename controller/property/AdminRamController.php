<?php 
include_once('model/Admin/Ram.php');
class AdminRamController{
	var $model_ram;
	function __construct(){
		$this->model_ram = new Ram();
	}
 	function T_list(){
 		unset($_SESSION['value_old']);
 		$data = $this->model_ram->T_list();
 		include_once('view/ram/ListRam.php');
 	}
 	function add(){
 		include_once('view/ram/AddRam.php');
 	}
 	function check_add($data){
 		$check_code = $this->model_ram->find($data['code']);

 		if($check_code){
 			setcookie('code_same','abc',time()+1);
 			return false;
 		}

 		return true;
 	}
 	function store(){
 		$data = $_POST;
 		if($this->check_add($data)){
	 	
	 		$status = $this->model_ram->create($data);
	 		if($status){
	 			setcookie('true','abc',time()+1);
	 		}else{
	 			setcookie('false','abc',time()+1);
	 		}
	 		header('location: ?role=admin&mod=ram&act=T_list');
	 	}else{
	 		$_SESSION['value_old'] = $data;	
 			header('location: ?role=admin&mod=ram&act=add');
	 	}
 		
 	}
 	function edit(){
 		$code = $_GET['code'];
 		$data = $this->model_ram->find($code);
 		include_once('view/ram/EditRam.php');
 	}
 	function update(){
 		$data = $_POST;
 	
 		$s = $this->model_ram->update($data);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=ram&act=T_list');
 		
 	}
 	function delete(){
 		$code = $_GET['code'];
 		$s = $this->model_ram->delete($code);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=ram&act=T_list');
 		
 	}
}

?>