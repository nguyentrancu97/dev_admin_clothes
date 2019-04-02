<?php 
include_once('model/Admin/Size.php');
class AdminSizeController{
	var $model_size;
	function __construct(){
		$this->model_size = new Size();
	}
 	function T_list(){
 		$data = $this->model_size->T_list();
 		include_once('view/size/ListSize.php');
 	}
 	function add(){
 		include_once('view/size/AddSize.php');
 	}
 	function store(){
 		$data = $_POST;
 		$data['created_at'] = Date('Y-m-d H:i:s');
 		$status = $this->model_size->create($data);
 		if($status){
 			header('location: ?role=admin&mod=size&act=T_list');
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