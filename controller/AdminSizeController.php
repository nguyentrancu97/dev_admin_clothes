<?php 
include_once('model/Admin/Size.php');
class AdminSizeController{
	var $model_size;
	function __construct(){
		$this->model_size = new Size();
	}
 	function T_list(){
 		$_SESSION['list'] = $this->model_size->T_list();
 		$data = $_SESSION['list'];
 		include_once('view/size/ListSize.php');
 	}
 	function add(){
 		include_once('view/size/AddSize.php');
 	}
 	function check_add($data){
 		
 		$list_size = $_SESSION['list'];
 		
 		foreach ($list as $key => $value) {
 			if($value['name'] === $data['name']){
 				return false;
 			}
 		}
 		return true;
 	}
 	function store(){
 		
 		$_SESSION['data'] = $_POST;
 		$status = $this->check_add($_POST);
 		if($status == false){
 			setcookie('false','abc',time()+2);
 			header('location: ?role=admin&mod=size&act=add');
 		}
 		else{
 			$data = $_POST;
 			$data['created_at'] = Date('Y-m-d H:i:s');
	 		$status = $this->model_size->create($data);
	 		if($status){
	 			unset($_SESSION['list']);
	 			unset($_SESSION['data']);
	 			header('location: ?role=admin&mod=size&act=T_list');
	 		}
 		}
 		
 	}
 	function edit(){
 		$id = $_GET['id'];
 		$data = $this->model_size->find($id);
 		include_once('view/size/EditSize.php');
 	}
 	function update(){
 		$data = $_POST;
 		$data['updated_at'] = Date('Y-m-d H:i:s');
 		$s = $this->model_size->update($data);
 		if($s){
 			header('location: ?role=admin&mod=size&act=T_list');
 		}
 	}
 	function delete(){
 		$size_id = $_GET['id'];
 		$s = $this->model_size->delete($size_id);
 		if($s){
 			header('location: ?role=admin&mod=size&act=T_list');
 		}
 	}
}

?>