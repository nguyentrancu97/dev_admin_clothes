<?php 
include_once('model/Admin/Color.php');
class AdminColorController{
	var $model_color;
	function __construct(){
		$this->model_color = new Color();
	}
 	function T_list(){
 		$_SESSION['list'] = $this->model_color->T_list();
 		$data = $_SESSION['list'];
 		include_once('view/color/ListColor.php');
 	}
 	function add(){
 		include_once('view/color/AddColor.php');
 	}
 	function check_add($data){
 		
 		$list_color = $_SESSION['list'];
 		
 		foreach ($list_color as $key => $value) {
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
 			header('location: ?role=admin&mod=color&act=add');
 		}
 		else{
 			$data = $_POST;
 			$data['created_at'] = Date('Y-m-d H:i:s');
	 		$status = $this->model_color->create($data);
	 		if($status){
	 			unset($_SESSION['list']);
	 			unset($_SESSION['data']);
	 			header('location: ?role=admin&mod=color&act=T_list');
	 		}
 		}
 		
 	}
 	function edit(){
 		$id = $_GET['id'];
 		$data = $this->model_color->find($id);
 		include_once('view/color/EditColor.php');
 	}
 	function update(){
 		$data = $_POST;
 		$data['updated_at'] = Date('Y-m-d H:i:s');
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