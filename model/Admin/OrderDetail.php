<?php 
include_once('model/model.php');
class OrderDetail extends model{
	var $table = "order_details";
	var $primary_key = "id";

	function FindByIdOrder($order_id){
		$query = "SELECT orders.address_receive, orders.phone_receive,orders.state,
		products.name as product_name, products.price, colors.name as color_name, sizes.name as size_name, order_details.quantity_buy
		FROM order_details
		inner join colors on order_details.color_id = colors.id
		inner join sizes on order_details.size_id = sizes.id
		inner join orders on order_details.order_id = orders.order_id
		inner join products on order_details.product_id = products.product_id
		where order_details.order_id = ".$order_id." ";

		
		$result = sqlsrv_query($this->conn,$query);
		$data = array();
		while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
	function FindIdOrderNotJoin($order_id){
		$query = " SELECT * From order_details where order_id = ".$order_id." ";
		$result = sqlsrv_query($this->conn, $query);
		while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
}

 ?>