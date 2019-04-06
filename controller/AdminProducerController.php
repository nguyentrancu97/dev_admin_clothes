<?php 
include_once('model/Admin/Producer.php');
class AdminProducerController{
	var $model_producer;
	function __construct(){
		$this->model_producer = new Producer();
	}
 	function T_list(){
 		$data = $this->model_producer->T_list();
 		include_once('view/producer/ListProducer.php');
 	}
 	function add(){
 		include_once('view/producer/AddProducer.php');
 	}
 	function store(){
 		$data = $_POST;
 		$data['created_at'] = Date('Y-m-d H:i:s');
 		
 		$status = $this->model_producer->create($data);
 		if($status){
 			header('location: ?role=admin&mod=producer&act=T_list');
 		}
 	}
 	function edit(){
 		$id = $_GET['producer_id'];
 		$data = $this->model_producer->find($id);
 		include_once('view/producer/EditProducer.php');
 	}
 	function update(){
 		$data = $_POST;
 		$data['updated_at'] = Date('Y-m-d H:i:s');
 		$s = $this->model_producer->update($data);
 		if($s){
 			header('location: ?role=admin&mod=producer&act=T_list');
 		}
 	}
 	function delete(){
 		$producer_id = $_GET['producer_id'];
 		$s = $this->model_producer->delete($producer_id);
 		if($s){
 			header('location: ?role=admin&mod=producer&act=T_list');
 		}
 	}
}

?>