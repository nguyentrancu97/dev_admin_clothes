<?php 
include_once('model/Admin/Branch.php');
class AdminBranchController{
	var $model_branch;
	function __construct(){
		$this->model_branch = new Branch();
	}
 	function T_list(){
 		$data = $this->model_branch->T_list();
 		include_once('view/branch/ListBranch.php');
 	}
 	function add(){
 		include_once('view/branch/AddBranch.php');
 	}
 	function store(){
 		$data = $_POST;
 		$status = $this->model_branch->create($data);
 		if($status){
 			header('location: ?role=admin&mod=branch&act=T_list');
 		}
 	}
 	function edit(){
 		$id = $_GET['branch_id'];
 		$data = $this->model_branch->find($id);
 		include_once('view/branch/EditBranch.php');
 	}
 	function update(){
 		$data = $_POST;
 		$s = $this->model_branch->update($data);
 		if($s){
 			header('location: ?role=admin&mod=branch&act=T_list');
 		}
 	}
 	function delete(){
 		$branch_id = $_GET['branch_id'];
 		$s = $this->model_branch->delete($branch_id);
 		if($s){
 			header('location: ?role=admin&mod=branch&act=T_list');
 		}
 	}
}

?>