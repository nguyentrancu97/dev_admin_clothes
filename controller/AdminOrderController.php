<?php 
include_once('model/Admin/Order.php');
include_once('model/Admin/OrderDetail.php');
include_once('model/Admin/Product.php');
class AdminOrderController{
	var $model_order;
	var $model_order_detail;
	var $model_product;
	function __construct(){
		$this->model_order = new Order();
		$this->model_order_detail = new OrderDetail();
		$this->model_product= new Product();
	}
 	function T_list(){
 		$data = $this->model_order->ListOrder();
 		$date = date('Y-m-d');
 		
 		include_once('view/order/ListOrder.php');
 	}
 	
 	function delete(){
 		$order_id = $_GET['order_id'];
 		$status = $_GET['status'];

 	
 		//cập nhật trạng thái order sau khi xử lí
 		$orderUpdate['id'] = $order_id;
 		$orderUpdate['created_by'] = $_SESSION['isLogin']['id'];
 		$orderUpdate['status'] = '';
 		if($status == 1 ){
 			//Lấy bản ghi có cùng order_id trong order_detail
 			$data_order_detail = $this->model_order_detail->FindByIdOrder($order_id);
 		// echo "<pre>";
 		// print_r($data_order_detail);
 		// die;
 			$data_arr = array();
 		//cộng sản phẩm trong product
 			foreach ($data_order_detail as $key => $value) {
 				$data = $this->model_product->find($value['product_id']);

 				$data['quantity'] = $data['quantity'] + $value['quantity_buy'];

 				$data_arr[] = $data;
 			}
 		//cộng xong

 		//cập nhật số lượng sản phẩm sau khi cộng trong product

 			foreach ($data_arr as $key => $data) {

 				$result = $this->model_product->update($data);
 			// var_dump($result);
 			// die;
 			}
 		//cập nhât số lượng product xong
 			$delete_order_detail = $this->model_order_detail->delete_by_order_id($order_id);
 			if($delete_order_detail){
 				$s = $this->model_order->delete($order_id);
 				if($s){
 					setcookie('true','abc',time()+1);
 				}else{
 					setcookie('false','abc',time()+1);
 				}
 			}else{
 				setcookie('false','abc',time()+1);
 			}

 			header('location: ?role=admin&mod=order&act=T_list'	);
 		}elseif($status == 2){
 			$orderUpdate['status'] = 1;
 		}elseif($status == 3){
 			$orderUpdate['status'] = 2;
 		}elseif($status == 4){
 			$orderUpdate['status'] = 3;
 		}
 		
 		$update_order = $this->model_order->update($orderUpdate);
 		
 		if($update_order){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		//end cập nhật
 		header('location: ?role=admin&mod=order&act=filter&status='.$orderUpdate['status'].' ');
 		
 		
 	}

 	function detail(){
 		$order_id = $_GET['order_id'];

 		$data_order = $this->model_order->FindOrder($order_id);

 		// $order_code = $data_customer['order_code'];
 		
 		$data_order_detail = $this->model_order_detail->FindByIdOrder($order_id);
 		
 		include_once('view/order/DetailOrder.php');
 	}
 	function process(){
 		$order_id = $_GET['order_id'];
 		$status = $_GET['status'];
 		
 		//cập nhật trạng thái order sau khi xử lí
 		$orderUpdate['id'] = $order_id;
 		$orderUpdate['created_by'] = $_SESSION['isLogin']['id'];
 		$orderUpdate['status'] = '';
 		if($status == 1 ){
 			$orderUpdate['status'] = 2;
 		}elseif($status == 2){
 			$orderUpdate['status'] = 3;
 		}elseif($status == 3){
 			$orderUpdate['status'] = 4;
 		}
 		
 		$update_order = $this->model_order->update($orderUpdate);
 		
 		if($update_order){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		//end cập nhật
 		header('location: ?role=admin&mod=order&act=filter&status='.$orderUpdate['status'].' ');
 	}

 	function filter(){
 		if(isset($_POST['status'])){
 			$status = $_POST['status'];
 		}
 		if(isset($_GET['status'])){
 			$status = $_GET['status'];
 		}
 		if($status==0){
 			header('location: ?role=admin&mod=order&act=T_list');
 		}
 		$date = date('Y-m-d');
 		$data = $this->model_order->filter_by_status($status);
 		include_once('view/order/ListOrder.php');
 	}

 	function filter_date(){
 		$from = $_POST['from'];
 		$to = $_POST['to'];
 		$date = date('Y-m-d');
 		$data = $this->model_order->filter_date($from,$to);
 		include_once('view/order/ListOrder.php');
 	}
 	
}

?>