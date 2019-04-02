<?php 
include_once('model/Admin/User.php');
include_once('model/Admin/Branch.php');
class AdminUserController{
	var $model_user;
	var $model_branch;
	function __construct(){
		$this->model_user = new User();
		$this->model_branch = new Branch();
	}
 	function T_list(){
 		$data = $this->model_user->T_list();
 		include_once('view/user/ListUser.php');
 	}
 	function add(){
 		$branch = $this->model_branch->T_list();
 		include_once('view/user/AddUser.php');
 	}
 	function store(){
 		$data = $_POST;
 		// $date = Date('Y-m-d H:i:s');
 		// echo "$date";
 		// die;
 		$data['created_at'] = Date('Y-m-d H:i:s');

 		$status = $this->model_user->create($data);
 		if($status){
 			header('location: ?role=admin&mod=user&act=T_list');
 		}
 	}
 	function edit(){
 		$id = $_GET['user_id'];
 		$data = $this->model_user->find($id);
 		$branch = $this->model_branch->T_list();
 		include_once('view/user/EditUser.php');
 	}
 	function update(){
 		$data = $_POST;
 		
 		$data['update_at'] = Date('Y-m-d H:i:s');
 		$s = $this->model_user->update($data);
 		if($s){
 			header('location: ?role=admin&mod=user&act=T_list');
 		}
 	}
 	function delete(){
 		$user_id = $_GET['user_id'];
 		$s = $this->model_user->delete($user_id);
 		if($s){
 			header('location: ?role=admin&mod=user&act=T_list');
 		}
 	}
}

?>