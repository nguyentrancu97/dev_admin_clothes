<?php 
include_once('model/Admin/Branch.php');
class AdminBranchController{
	var $model_branch;
	function __construct(){
		$this->model_branch = new Branch();
	}
 	function T_list(){
 		unset($_SESSION['value_old']);
 		$data = $this->model_branch->T_list();
 		include_once('view/branch/ListBranch.php');
 	}
 	function add(){
 		include_once('view/branch/AddBranch.php');
 	}
 	function check_add($data){
 		$check_code = $this->model_branch->find($data['code']);

 		if($check_code){
 			setcookie('code_same','abc',time()+1);
 			return false;
 		}

 		return true;
 	}
 	function store(){
 		$data = $_POST;
 		if($this->check_add($data)){
	 		
	 		$status = $this->model_branch->create($data);
	 		if($status){
	 			setcookie('true','abc',time()+1);
	 		}else{
	 			setcookie('false','abc',time()+1);
	 		}
	 		header('location: ?role=admin&mod=branch&act=T_list');
	 	}else{
	 		$_SESSION['value_old'] = $data;	
 			header('location: ?role=admin&mod=branch&act=add');
	 	}
 		
 	}
 	function edit(){
 		$code = $_GET['code'];
 		$data = $this->model_branch->find($code);
 		include_once('view/branch/EditBranch.php');
 	}
 	function update(){
 		$data = $_POST;
 		
 		$s = $this->model_branch->update($data);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=branch&act=T_list');
 		
 	}
 	function delete(){
 		$code = $_GET['code'];
 		$s = $this->model_branch->delete($code);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=branch&act=T_list');
 		
 	}
}

?>