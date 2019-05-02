<?php 
include_once('model/Admin/Status.php');
class AdminStatusController{
	var $model_status;
	function __construct(){
		$this->model_status = new Status();
	}
 	function T_list(){
 		unset($_SESSION['value_old']);
 		$data = $this->model_status->T_list();
 		include_once('view/status/ListStatus.php');
 	}
 	function add(){
 		include_once('view/status/AddStatus.php');
 	}
 	function check_add($data){
 		$check_code = $this->model_status->find($data['code']);

 		if($check_code){
 			setcookie('code_same','abc',time()+1);
 			return false;
 		}

 		return true;
 	}
 	function store(){
 		$data = $_POST;
 		if($this->check_add($data)){
	 		
	 		$status = $this->model_status->create($data);
	 		if($status){
	 			setcookie('true','abc',time()+1);
	 		}else{
	 			setcookie('false','abc',time()+1);
	 		}
	 		header('location: ?role=admin&mod=status&act=T_list');
	 	}else{
	 		$_SESSION['value_old'] = $data;	
 			header('location: ?role=admin&mod=status&act=add');
	 	}
 		
 	}
 	function edit(){
 		$code = $_GET['code'];
 		$data = $this->model_status->find($code);
 		include_once('view/status/EditStatus.php');
 	}
 	function update(){
 		$data = $_POST;
 		
 		$s = $this->model_status->update($data);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=status&act=T_list');
 		
 	}
 	function delete(){
 		$code = $_GET['code'];
 		$s = $this->model_status->delete($code);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=status&act=T_list');
 		
 	}
}

?>