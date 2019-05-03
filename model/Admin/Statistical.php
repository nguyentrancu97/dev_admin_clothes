<?php 
include_once("model/model.php");
class Statistical extends model{
	
	function getTopSale(){
		$query="SELECT product.code, product.name, SUM(order_detail.quantity) as total_quantity, SUM(order_detail.quantity * order_detail.product_price) as sub_total
		FROM `order_detail`, product

		WHERE order_detail.product_id = product.id

		GROUP BY product_id
		ORDER BY total_quantity DESC";


		$data = array();
		$result = mysqli_query($this->conn, $query);
		while ($row = mysqli_fetch_assoc($result)) {
			$data[] =$row;
		}
		return $data;

	}
	function getTopStaff(){
		$query="SELECT x.created_by,`user`.code,`user`.name,`user`.email, count( x.created_by ) AS total_order, sum( x.total_price ) AS total_price, sum( x.total_quantity ) AS total_quantity,
			sum( x.total_product ) AS total_product 
						FROM (
						SELECT ORDER.CODE, ORDER.created_by,
						sum( order_detail.quantity * order_detail.product_price ) AS total_price,
						sum( order_detail.quantity ) AS total_quantity,
						count( order_detail.product_id ) AS total_product 
			FROM `order`
			INNER JOIN order_detail ON order_detail.order_id = `order`.id 
			GROUP BY ORDER.created_by, ORDER.id ) AS x
			JOIN USER ON user.id = x.created_by 
			WHERE x.created_by IS NOT NULL 
			GROUP BY x.created_by ";

		$data = array();
		$result = mysqli_query($this->conn, $query);
		while ($row = mysqli_fetch_assoc($result)) {
			$data[] =$row;
		}
		return $data;

	}
	function order_by_staff($staff_id){
		$query = "SELECT order.id,order.code,order.created_date,order.status,order.created_by, 
		user.name as user_name
		FROM `order` 
		
		left join user on order.created_by = user.id
		WHERE created_by = '".$staff_id."' ";

		$data = array();
		$result = mysqli_query($this->conn, $query);
		while ($row = mysqli_fetch_assoc($result)) {
			$data[] =$row;
		}
		return $data;
	}

}

 ?>