<?php 

include_once("model/model.php");
class Product extends model{
	var $table = "`product`";
	var $primary_key = "id";

	function ListProduct(){
		$query = "SELECT product.id,product.code, product.name , product.quantity, product.image, product_status.name as status, product.price, product.created_date
		FROM `product`
		left join product_status on product.status_id = product_status.id";
		
		
		$result = mysqli_query($this->conn,$query);
		$data = array();
		while ($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		return $data;
	}

	function ProductDetail($product_id){
		$query = "SELECT product.code, product.name , product.quantity, product.image, product.price, product.description, product.created_date, user.name as user,
		product_status.name as status,
		product_type.name as type,product_branch.name as branch, product_color.name as color,
		product_ram.name as ram, product_operating_system.name as operating_system,
		product_cpu.name as cpu, product_screen_size.name as screen_size
		FROM `product`
		left join product_status on product.status_id = product_status.id
		left join product_type on product.type_id = product_type.id
		left join product_branch on product.branch_id = product_branch.id
		left join product_color on product.color_id = product_color.id
		left join product_ram on product.ram_id = product_ram.id
		left join product_operating_system on product.operating_system_id = product_operating_system.id
		left join product_cpu on product.cpu_id = product_cpu.id
		left join product_screen_size on product.screen_size_id = product_screen_size.id
		left join user on product.created_by = user.id
		where product.id = '".$product_id."'";
		

		$result = mysqli_query($this->conn,$query);
	
		$row = mysqli_fetch_assoc($result); 
		
		
		return $row;
	}
	function findByCode($code){
		$query = " SELECT * from product where code = '".$code."' ";
		$result = mysqli_query($this->conn,$query);
	
		$row = mysqli_fetch_assoc($result); 
		
		
		return $row;
	}
	
}


 ?>
