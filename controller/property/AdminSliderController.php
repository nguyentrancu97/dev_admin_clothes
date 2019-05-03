<?php 
include_once('model/Admin/Slider.php');
class AdminSliderController{
	var $model_slider;
	function __construct(){
		$this->model_slider = new Slider();
	}
 	function T_list(){
 		unset($_SESSION['value_old']);
 		$data = $this->model_slider->T_list();
 		include_once('view/slider/ListSlider.php');
 	}
 	function add(){
 		
 		include_once('view/slider/AddSlider.php');
 	}
 	function check_add($data){
 		$data_check = $this->model_slider->find($data['code']);

 		if($data_check){
 			return false;
 		}

 		return true;
 	}
 	function store(){
 		$data = $_POST;

 		if($this->check_add($data)){
 			
	 		if(isset($_FILES['image'])){
	 			$data['image'] = $_FILES['image']['name'];
	 			move_uploaded_file($_FILES['image']['tmp_name'],"public/images/uploads/".$_FILES['image']['name']);
	 			$status = $this->model_slider->create($data);
	 			if($status){
	 				setcookie('true','abc',time()+1);
	 			}else{
	 				setcookie('false','abc',time()+1);
	 			}
	 			header('location: ?role=admin&mod=slider&act=T_list');
	 		}
 		}else{
 			setcookie('code_same','abc',time()+1);

 			$_SESSION['value_old'] = $data;
 			// var_dump($_SESSION['value_old']);
 			// 	die;
 			header('location: ?role=admin&mod=slider&act=add');
 		}
 		
	
 	}
 	function edit(){
 		$code = $_GET['code'];
 		$data = $this->model_slider->find($code);
 		include_once('view/slider/EditSlider.php');
 	}
 	function update(){
 		$data = $_POST;

 		
 
 		if($_FILES['image']['error']!= 4){
 			$data['image'] = $_FILES['image']['name'];
 			move_uploaded_file($_FILES['image']['tmp_name'],"public/images/uploads/".$_FILES['image']['name']);
 			
 			$s = $this->model_slider->update($data);
 			if($s){
 				setcookie('true','abc',time()+1);
 			}else{
 				setcookie('false','abc',time()+1);
 			}
 			header('location: ?role=admin&mod=slider&act=T_list');
 		}else{
 			
 			$s = $this->model_slider->update($data);

 			if($s){
 				setcookie('true','abc',time()+1);
 			}else{
 				setcookie('false','abc',time()+1);
 			}
 			header('location: ?role=admin&mod=slider&act=T_list');
 		}
 		
 	}
 	function delete(){
 		$code = $_GET['code'];
 		$s = $this->model_slider->delete($code);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=slider&act=T_list');
 	}
}
