<?php 

include_once('model/Employee/Sale.php');
include_once('model/Admin/Customer.php');
include_once('model/Admin/Product.php');
include_once('model/Admin/ProductDetail.php');
include_once('model/Admin/OrderDetail.php');
include_once('model/Admin/Order.php');
class AdminSaleController{
	var $model_sale;
	var $model_customer;
	var $model_product;
	var $model_product_detail;
	var $model_order;
	var $model_order_detail;
	function __construct(){
		$this->model_sale = new Sale();
		$this->model_customer = new Customer();
		$this->model_product = new Product();
		$this->model_product_detail = new ProductDetail();
		$this->model_order = new Order();
		$this->model_order_detail = new OrderDetail();
	}
	function list_customer(){
		$data = $this->model_customer->T_list();
		include_once('view/sale/list_customer.php');
	}
	function list_product(){
		if(isset($_GET['customer_id'])){
			$customer_id = $_GET['customer_id'];
			$_SESSION['customer'] = $this->model_customer->find($customer_id);
		}
		$data = $this->model_product->ListProduct();
		include_once('view/sale/list_product.php');
	}
	function buy(){
		$product_id = $_GET['product_id'];
		$product = $this->model_product->find($product_id);
		
		$product_details = $this->model_product_detail->FindByIdProduct($product_id);
		$sizes = array();
		$colors = array();
		
		foreach ($product_details as $key => $product_detail) {
			$check = true;
			foreach ($sizes as $key => $size) {
				if($product_detail['size_id'] == $size['size_id'] ){
					$check = false;
				}
			}
			if($check){
				$size['size_id'] = $product_detail['size_id'];
				$size['size_name'] = $product_detail['size_name'];
				array_push($sizes, $size);
			}
			
		}
		foreach ($product_details as $key => $product_detail) {
			$check = true;
			foreach ($colors as $key => $color) {
				if($product_detail['color_id'] == $color['color_id'] ){
					$check = false;
				}
			}
			if($check){
				$color['color_id'] = $product_detail['color_id'];
				$color['color_name'] = $product_detail['color_name'];
				array_push($colors, $color);
			}
			
		}
		
		include_once('view/sale/buy.php');
	}

	function add2cart(){
		if(isset($_GET['product_id'])){
			$product_id = $_GET['product_id'];
			
			$_SESSION['cart'][$product_id]['quantity_buy'] += 1;
			
			setcookie('true','abc',time()+1);
			header('location: ?role=employee&mod=sale&act=cart');
			
		}else{
			$data = $_POST;
			$dataExtend = $this->model_sale->getDataExtend($data['color_id'],$data['size_id']);
			$data['size_name'] = $dataExtend['size_name'];
			$data['color_name'] = $dataExtend['color_name'];
		
			
			if(isset($_SESSION['cart'][$data['product_id']])){
				
				$_SESSION['cart'][$data['product_id']]['quantity_buy'] = $_SESSION['cart'][$data['product_id']]['quantity_buy'] + $data['quantity_buy'];
			}else{
				$_SESSION['cart'][$data['product_id']] = $data;
			}
			setcookie('true','abc',time()+1);
			header('location: ?role=employee&mod=sale&act=list_product');
		}
		
	
		
	}

	function reduce(){
		if(isset($_GET['product_id'])){
			$product_id = $_GET['product_id'];
			if($_SESSION['cart'][$product_id]['quantity_buy'] <= 0){
				unset($_SESSION['cart'][$product_id]);
			}else{
				$_SESSION['cart'][$product_id]['quantity_buy'] -= 1;
			}
			
			header('location: ?role=employee&mod=sale&act=cart');
		}
	}
	function removeCart(){
		if(isset($_GET['product_id'])){
			unset($_SESSION['cart'][$_GET['product_id']]);
		}
	}
	function cart(){
		include_once('view/sale/cart.php');
	}
	function delete_cart(){
		unset($_SESSION['cart']);
		unset($_SESSION['customer']);
		header('location: ?role=employee&mod=sale&act=list_customer');
	}

	function check_out(){
		if(isset($_SESSION['cart'])){
			if(isset($_SESSION['customer'])){
				$data_order = array();
				$data_order['order_code'] = $_SESSION['customer']['customer_id'] . time();
				$data_order['customer_id'] = $_SESSION['customer']['customer_id'];
				$data_order['status'] = 1;
				$data_order['branch_id'] = $_SESSION['isLogin']['branch_id'];
				$data_order['created_at'] = Date('Y-m-d H:i:s');
				
				$create_order = $this->model_order->create($data_order);
				
				if(!$create_order){

					foreach ($_SESSION['cart'] as $key => $value) {
						$data_order_detail = array();
						$data = $this->model_product_detail->FindByColorSizeProduct($value['color_id'],$value['size_id'],$value['product_id']);
						unset($data['rowguid']);
						$data['quantity'] = $data['quantity'] - $value['quantity_buy'];
						$data['updated_at'] = Date('Y-m-d H:i:s');

						
						$update_product_detail = $this->model_product_detail->update($data);
						var_dump($update_product_detail);
						$data_order_detail['product_detail_id'] = $data['id'];
						$data_order_detail['quantity_buy'] = $value['quantity_buy'];
						$data_order_detail['price'] = $value['price'];
						$data_order_detail['order_code'] = $data_order['order_code'];
						$data_order_detail['created_at'] = $data_order['created_at'];
						// echo "<pre>";
						// print_r($data_order_detail);
						// die;
						$create_order_detail = $this->model_order_detail->create($data_order_detail);
						
					}
					
					if($create_order_detail){
						unset($_SESSION['cart']);
						unset($_SESSION['customer']);
						setcookie("check_out_success","abc",time()+1);
						header('location: ?role=employee&mod=sale&act=list_customer');
					}
				}

			}else{
				$data_order = array();
				$data_order['order_code'] = '4'. time();
				$data_order['customer_id'] = 4;
				$data_order['status'] = 1;
				$data_order['created_at'] = Date('Y-m-d H:i:s');

				$create_order = $this->model_order->create($data_order);
				
				if(!$create_order){

					foreach ($_SESSION['cart'] as $key => $value) {
						$data_order_detail = array();
						$data = $this->model_product_detail->FindByColorSizeProduct($value['color_id'],$value['size_id'],$value['product_id']);
						unset($data['rowguid']);
						$data['quantity'] = $data['quantity'] - $value['quantity_buy'];
						$data['updated_at'] = Date('Y-m-d H:i:s');

						
						$update_product_detail = $this->model_product_detail->update($data);

						$data_order_detail['product_detail_id'] = $data['id'];
						$data_order_detail['quantity_buy'] = $value['quantity_buy'];
						$data_order_detail['price'] = $value['price'];
						$data_order_detail['order_code'] = $data_order['order_code'];
						$data_order_detail['created_at'] = $data_order['created_at'];
						
						$create_order_detail = $this->model_order_detail->create($data_order_detail);
					}
					
					if($create_order_detail){
						unset($_SESSION['cart']);
					
						setcookie("check_out_success","abc",time()+1);
						header('location: ?role=employee&mod=sale&act=list_customer');
					}
				}
			}
		}
	}
}
 ?>
