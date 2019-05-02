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

}

 ?>