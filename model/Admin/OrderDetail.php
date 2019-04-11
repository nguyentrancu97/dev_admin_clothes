<?php 
include_once('model/model.php');
class OrderDetail extends model{
	var $table = "order_details";
	var $primary_key = "id";

	function FindByIdOrder($order_code){
		$query = "SELECT orders.address_receive, orders.phone_receive, orders.status,
		order_details.quantity_buy,order_details.price,
		sizes.name as size_name, colors.name as color_name, products.name as product_name, branchs.name as branch_name
		from product_details, order_details, sizes, colors, products, orders, branchs
		where order_details.order_code = '".$order_code."'
		AND order_details.order_code = orders.order_code 
		AND order_details.product_detail_id = product_details.id
		AND product_details.color_id = colors.id
		AND product_details.size_id = sizes.id AND product_details.branch_id = branchs.branch_id
		AND product_details.product_id = products.product_id";
		
		$result = sqlsrv_query($this->conn,$query);
		$data = array();
		while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
	function FindIdOrderNotJoin($order_code){
		$query = " SELECT * From order_details where order_code = ".$order_code." ";
		$result = sqlsrv_query($this->conn, $query);
		while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
}

 ?>