<?php 
include_once('model/model.php');
class OrderDetail extends model{
	var $table = "order_detail";
	var $primary_key = "id";

	function FindByIdOrder($order_id){
		$query = "SELECT product.code as product_code, product.name as product_name,
					order_detail.quantity as quantity_buy,order_detail.product_price, order_detail.product_id
					From order_detail
					LEFT join product on order_detail.product_id = product.id
					

					where order_detail.order_id = '".$order_id."' ";
		
		$result = mysqli_query($this->conn,$query);
		$data = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}
	function delete_by_order_id($order_id){
		$query="DELETE from order_detail where order_id = '".$order_id."' ";
		$result = mysqli_query($this->conn,$query);
		
		return $result;
	}
	
}

 ?>