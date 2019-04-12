<?php 
include_once('model/Admin/Order.php');
include_once('model/Admin/OrderDetail.php');
include_once('model/Admin/ProductDetail.php');
class AdminOrderController{
	var $model_order;
	var $model_order_detail;
	var $model_product_detail;
	function __construct(){
		$this->model_order = new Order();
		$this->model_order_detail = new OrderDetail();
		$this->model_product_detail= new ProductDetail();
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
 		
 	
 		$order_code = $data_customer['order_code'];
 		
 		$data_order_detail = $this->model_order_detail->FindByIdOrder($order_code);
 		
 		include_once('view/order/DetailOrder.php');
 	}
 	function process(){
 		$order_id = $_GET['order_id'];

 		$order = $this->model_order->find($order_id);
 		
 		$order_code = $order['order_code'];

 		$data_order_detail = $this->model_order_detail->FindIdOrderNotJoin($order_code);
 		// echo "<pre>";
 		// print_r($data_order_detail);
 		// die;
 		$data_arr = array();
 		
 		foreach ($data_order_detail as $key => $value) {
 			$data = $this->model_product_detail->find($value['product_detail_id']);
 			unset($data['rowguid']);
 		 	$data['quantity'] = $data['quantity'] - $value['quantity_buy'];
 		 
 			if($data['quantity'] < 0){
 				die(setcookie('false','abc',time()+1));
 			}
 			$data_arr[] = $data;
 		}
 		// echo "<pre>";
 		// print_r($data_arr);
 		// die;
 		foreach ($data_arr as $key => $data) {
 			$data['updated_at'] = Date('Y-m-d H:i:s');
 			$result = $this->model_product_detail->update($data);
 		}
 		$orderNew['order_id'] = $order_id;
 		$orderNew['status'] = 1;

 		$update_order = $this->model_order->update($orderNew);
 		setcookie('process_success','abc',time()+1);
 		header('location: ?role=admin&mod=order&act=T_list');
 	}
}

?>