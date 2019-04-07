<?php 
include_once("model/model.php");
class Order extends model{
	var $table = 'orders';
	var $primary_key = 'order_id';
	function ListOrder(){
		$query = "SELECT orders.order_id,orders.address_receive,orders.created_at,orders.phone_receive,orders.status , 
		customers.name as customer_name 
		FROM orders 
		inner join customers on orders.customer_id = customers.customer_id";
		
		$result = sqlsrv_query($this->conn,$query);
		$data = array();
		while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
	function FindOrder($order_id){
		$query = " SELECT customers.name as customer_name, customers.address as customer_address, 
					customers.dateofbirth, customers.username, orders.order_id
					From orders
					inner join customers on orders.customer_id = customers.customer_id
					where orders.order_id = ".$order_id." ";

		$result = sqlsrv_query($this->conn,$query);
		$row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC) ;
		
		return $row;
	}
}
 ?>