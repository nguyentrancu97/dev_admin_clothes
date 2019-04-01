<?php 

include_once("model/model.php");
class Product extends model{
	var $table = "products";
	var $primary_key = "product_id";

	function ListProduct(){
		$query = "SELECT * , products.name as product_name,
		producers.name as producer_name, categories.name as category_name
		FROM products
		inner join producers on products.producer_id = producers.producer_id
		inner join categories on products.category_id = categories.category_id";

		$result = sqlsrv_query($this->conn,$query);
		$data = array();
		while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}
}


 ?>
