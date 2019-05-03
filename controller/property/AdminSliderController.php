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
 	
 	function store(){
 		$data = $_POST;
 		
 		if(isset($_FILES['image'])){
 			$data['image'] = 'sliders/'.$_FILES['image']['name'];
 			move_uploaded_file($_FILES['image']['tmp_name'],"public/images/uploads/sliders/".$_FILES['image']['name']);
 			$status = $this->model_slider->create($data);
// var_dump($status);
// die;
 			if($status){
 				setcookie('true','abc',time()+1);
 			}else{
 				setcookie('false','abc',time()+1);
 			}
 			header('location: ?role=admin&mod=slider&act=T_list');
 		}
 		
 	}
 	function edit(){
 		$id = $_GET['id'];
 		$data = $this->model_slider->find($id);
 		include_once('view/slider/EditSlider.php');
 	}
 	function update(){
 		$data = $_POST;
 		if($_FILES['image']['error']!= 4){
 			$data['image'] = 'sliders/'.$_FILES['image']['name'];
 			move_uploaded_file($_FILES['image']['tmp_name'],"public/images/uploads/sliders/".$_FILES['image']['name']);
 			
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
 		$id = $_GET['id'];
 		$s = $this->model_slider->delete($id);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=slider&act=T_list');
 	}
}
