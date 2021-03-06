<?php 
include_once('model/model.php');
class ProductDetail extends model{
	var $table = "product_details";
	var $primary_key = "id";
	function FindByIdProduct($id){
		$query = "SELECT product_details.id , product_details.size_id, product_details.color_id, 
		products.name as product_name, colors.name as color_name, sizes.name as size_name,
		product_details.quantity
		FROM product_details
		inner join colors on product_details.color_id = colors.id
		inner join sizes on product_details.size_id = sizes.id
		inner join products on product_details.product_id = products.product_id
		where product_details.product_id = ".$id." ";

		
		$result = sqlsrv_query($this->conn,$query);
		$data = array();
		while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
			$data[] = $row;
		}
		return $data;
	}

	function FindByColorSizeProduct($color_id,$size_id,$product_id){
		$query = "SELECT * From product_details where color_id = '".$color_id."' AND size_id = '".$size_id."' AND product_id = '".$product_id."' ";
		
		$result = sqlsrv_query($this->conn,$query);
		$row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
		return $row;
	}
	
	
}

 ?>