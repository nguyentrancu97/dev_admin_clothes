<?php 
include_once('model/Admin/ScreenSize.php');
class AdminScreenSizeController{
	var $model_screen_size;
	function __construct(){
		$this->model_screen_size = new ScreenSize();
	}
 	function T_list(){
 		unset($_SESSION['value_old']);
 		$data = $this->model_screen_size->T_list();
 		include_once('view/screen_size/ListScreenSize.php');
 	}
 	function add(){
 		include_once('view/screen_size/AddScreenSize.php');
 	}
 	function check_add($data){
 		$check_code = $this->model_screen_size->find($data['code']);

 		if($check_code){
 			setcookie('code_same','abc',time()+1);
 			return false;
 		}

 		return true;
 	}
 	function store(){
 		$data = $_POST;
 		if($this->check_add($data)){
	 	
	 		$status = $this->model_screen_size->create($data);
	 		if($status){
	 			setcookie('true','abc',time()+1);
	 		}else{
	 			setcookie('false','abc',time()+1);
	 		}
	 		header('location: ?role=admin&mod=screen_size&act=T_list');
	 	}else{
	 		$_SESSION['value_old'] = $data;	
 			header('location: ?role=admin&mod=screen_size&act=add');
	 	}
 		
 	}
 	function edit(){
 		$code = $_GET['code'];
 		$data = $this->model_screen_size->find($code);
 		include_once('view/screen_size/EditScreenSize.php');
 	}
 	function update(){
 		$data = $_POST;
 		
 		$s = $this->model_screen_size->update($data);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=screen_size&act=T_list');
 		
 	}
 	function delete(){
 		$code = $_GET['code'];
 		$s = $this->model_screen_size->delete($code);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=screen_size&act=T_list');
 		
 	}
}

?>