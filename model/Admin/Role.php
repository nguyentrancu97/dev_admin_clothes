<?php 
include_once("model/model.php");
class Role extends model{
	var $table = 'role';
	var $primary_key = 'code';

	function update_user_role($user_id,$role_id){
		$query = "UPDATE user_role SET role_id = '".$role_id."' WHERE user_id = '".$user_id."'";
		
		$result = mysqli_query($this->conn,$query);
		return $result;
	}
}

 ?>