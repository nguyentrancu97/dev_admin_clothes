<?php 
include_once('model/Admin/Color.php');
class AdminColorController{
	var $model_color;
	function __construct(){
		$this->model_color = new Color();
	}
 	function T_list(){
 		unset($_SESSION['value_old']);
 		$data = $this->model_color->T_list();
 		include_once('view/color/ListColor.php');
 	}
 	function add(){
 		include_once('view/color/AddColor.php');
 	}
 	function check_add($data){
 		$check_code = $this->model_color->find($data['code']);

 		if($check_code){
 			setcookie('code_same','abc',time()+1);
 			return false;
 		}

 		return true;
 	}
 	function store(){
 		$data = $_POST;
 		if($this->check_add($data)){
	 		
	 		$status = $this->model_color->create($data);
	 		if($status){
	 			setcookie('true','abc',time()+1);
	 		}else{
	 			setcookie('false','abc',time()+1);
	 		}
	 		header('location: ?role=admin&mod=color&act=T_list');
	 	}else{
	 		$_SESSION['value_old'] = $data;	
 			header('location: ?role=admin&mod=color&act=add');
	 	}
 		
 	}
 	function edit(){
 		$code = $_GET['code'];
 		$data = $this->model_color->find($code);
 		include_once('view/color/EditColor.php');
 	}
 	function update(){
 		$data = $_POST;
 	
 		$s = $this->model_color->update($data);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=color&act=T_list');
 		
 	}
 	function delete(){
 		$code = $_GET['code'];
 		$s = $this->model_color->delete($code);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=color&act=T_list');
 		
 	}
}

?>