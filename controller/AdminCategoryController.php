<?php 
include_once('model/Admin/Category.php');
class AdminCategoryController{
	var $model_category;
	function __construct(){
		$this->model_category = new Category();
	}
 	function T_list(){
 		$data = $this->model_category->T_list();
 		include_once('view/category/ListCategory.php');
 	}
 	function add(){
 		$category = $this->model_category->T_list();
 		include_once('view/category/AddCategory.php');
 	}
 	function store(){
 		$data = $_POST;
 		$status = $this->model_category->create($data);
 		if($status){
 			header('location: ?role=admin&mod=category&act=T_list');
 		}
 	}
 	function edit(){
 		$id = $_GET['id'];
 		$category = $this->model_category->T_list();
 		$parent=array();
 		foreach ($category as $key => $value) {
 			if($value['parent_id'] == 0){
 				$parent[] = $value;
 			}
 		}
 		
 		$data = $this->model_category->find($id);
 		include_once('view/category/EditCategory.php');
 	}
 	function update(){
 		$data = $_POST;
 		$s = $this->model_category->update($data);
 		if($s){
 			header('location: ?role=admin&mod=category&act=T_list');
 		}
 	}
 	function delete(){
 		$category_id = $_GET['id'];
 		$s = $this->model_category->delete($category_id);
 		if($s){
 			header('location: ?role=admin&mod=category&act=T_list');
 		}
 	}
}
