<?php 
include_once('model/Admin/Color.php');
class AdminColorController{
	var $model_color;
	function __construct(){
		$this->model_color = new Color();
	}
 	function T_list(){
 		$data = $this->model_color->T_list();
 		include_once('view/color/ListColor.php');
 	}
 	function add(){
 		include_once('view/color/AddColor.php');
 	}
 	function store(){
 		$data = $_POST;
 		$status = $this->model_color->create($data);
 		if($status){
 			header('location: ?role=admin&mod=color&act=T_list');
 		}
 	}
 	function edit(){
 		$id = $_GET['id'];
 		$data = $this->model_color->find($id);
 		include_once('view/color/EditColor.php');
 	}
 	function update(){
 		$data = $_POST;
 		$s = $this->model_color->update($data);
 		if($s){
 			header('location: ?role=admin&mod=color&act=T_list');
 		}
 	}
 	function delete(){
 		$color_id = $_GET['id'];
 		$s = $this->model_color->delete($color_id);
 		if($s){
 			header('location: ?role=admin&mod=color&act=T_list');
 		}
 	}
}

?>