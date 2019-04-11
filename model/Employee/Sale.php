<?php 
include_once("model/model.php");
class Sale extends model{
	
	function getDataExtend($color_id,$size_id){
		$query = "SELECT colors.name as color_name, sizes.name as size_name 
		from colors, sizes
		where colors.id = '".$color_id."' AND sizes.id = '".$size_id."' ";

		$result = sqlsrv_query($this->conn,$query);
		
		$row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC); 
		return $row;

	}
}

 ?>