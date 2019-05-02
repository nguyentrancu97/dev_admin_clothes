<?php 
include_once("model/model.php");
class Order extends model{
	var $table = '`order`';
	var $primary_key = 'id';
	function ListOrder(){
		$query = "SELECT order.id,order.code,order.created_date,order.status,order.created_by, 
		user.name as user_name
		FROM `order` 
		
		left join user on order.created_by = user.id";
		
		
		$result = mysqli_query($this->conn,$query);
		$data = array();

		while ($row = mysqli_fetch_assoc($result) ){
			$data[] = $row;
		}
		
		return $data;
	}
	function FindOrder($order_id){
		$query = " SELECT order.id, order.code, order.created_date, order.status, order.created_by, 
		user.name as user_name, ship.csin_name,ship.csin_email,ship.csin_address,ship.csin_phone,ship.csin_note, ship.customer_name,
		ship.customer_address,ship.customer_email,ship.customer_phone
		FROM `order`
		left join 	(
						SELECT customer_ship_info.`name` as csin_name, customer_ship_info.email as csin_email, customer_ship_info.address as csin_address, customer_ship_info.phone as csin_phone, customer_ship_info.note as csin_note, customer_ship_info.`id`,
						customer.`name` as customer_name, customer.address as customer_address, customer.email as customer_email, customer.phone as customer_phone,
						map_village.`name` as map_name
						from customer_ship_info
						LEFT JOIN customer  on customer_ship_info.customer_id = customer.id
						LEFT JOIN map_village on customer_ship_info.village_code = map_village.code
					) as ship
		on `order`.ship_info_id = `ship`.id	
		left join `user` on `order`.created_by = `user`.id
		where order.id = '".$order_id."' ";

		$result = mysqli_query($this->conn,$query);
		$row = mysqli_fetch_assoc($result) ;
		
		return $row;
	}
	function filter_by_status($status){
		$query="SELECT order.id,order.code,order.created_date,order.status,order.created_by, 
		user.name as user_name
		FROM `order` 
		
		left join user on order.created_by = user.id
		where order.status = '".$status."' ";

		$result = mysqli_query($this->conn,$query);
		$data = array();

		while ($row = mysqli_fetch_assoc($result) ){
			$data[] = $row;
		}
		
		return $data;

	}

	function filter_date($from,$to){
		$query="SELECT order.id,order.code,order.created_date,order.status,order.created_by, 
		user.name as user_name
		FROM `order` 
		
		left join user on order.created_by = user.id  WHERE CONVERT(created_date,DATE) BETWEEN '".$from."' and  '".$to."' ";
		$result = mysqli_query($this->conn,$query);
		$data = array();

		while ($row = mysqli_fetch_assoc($result) ){
			$data[] = $row;
		}
		
		return $data;
	}
}
 ?>