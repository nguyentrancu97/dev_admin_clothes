<?php 
include_once('model/Admin/Order.php');
include_once('model/Admin/OrderDetail.php');

class AdminOrderController{
	var $model_order;
	function __construct(){
		$this->model_order = new Order();
		$this->model_order_detail = new OrderDetail();
	}
 	function T_list(){
 		$data = $this->model_order->ListOrder();
 		// echo "<pre>";
 		// print_r($data);
 		// die;
 		include_once('view/order/ListOrder.php');
 	}
 	function add(){
 		include_once('view/order/AddOrder.php');
 	}
 	function store(){
 		$data = $_POST;
 		$data['created_at'] = Date('Y-m-d H:i:s');
 		$status = $this->model_order->create($data);
 		if($status){
 			header('location: ?role=admin&mod=order&act=T_list');
 		}
 	}
 	function edit(){
 		$id = $_GET['order_id'];
 		$data = $this->model_order->find($id);
 		include_once('view/order/EditOrder.php');
 	}
 	function update(){
 		$data = $_POST;
 		$data['updated_at'] = Date('Y-m-d H:i:s');
 		$s = $this->model_order->update($data);
 		if($s){
 			header('location: ?role=admin&mod=order&act=T_list');
 		}
 	}
 	function delete(){
 		$order_id = $_GET['order_id'];
 		$s = $this->model_order->delete($order_id);
 		if($s){
 			header('location: ?role=admin&mod=order&act=T_list');
 		}
 	}

 	function detail(){
 		$order_id = $_GET['order_id'];
 		$data_customer = $this->model_order->FindOrder($order_id);

 		$data_order = $this->model_order_detail->FindByIdOrder($order_id);

 		include_once('view/order/DetailOrder.php');
 	}
}

?>