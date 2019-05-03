<?php 
include_once("model/model.php");
class User extends model{
	var $table = 'user';
	var $primary_key = 'code';

	function check_email_add($data){

		$query = "SELECT * FROM user WHERE email = '".$data['email']."' ";
		
		$result = mysqli_query($this->conn,$query);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function check_phone_add($data){
		$query = "SELECT * FROM user WHERE phone = '".$data['phone']."' ";
		$result = mysqli_query($this->conn,$query);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function check_email_edit($data){

		$query = "SELECT * FROM user WHERE email = '".$data['email']."' AND code != '".$data['code']."' ";
		
		$result = mysqli_query($this->conn,$query);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function check_phone_edit($data){

		$query = "SELECT * FROM user WHERE phone = '".$data['phone']."' AND code != '".$data['code']."' ";
		
		$result = mysqli_query($this->conn,$query);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}

	function getUserById($user_id){
		$query="SELECT * FROM user where id = '".$user_id."' ";
		$result = mysqli_query($this->conn,$query);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function find_full_role($code){
		$query="SELECT user.*, ur.role_name,ur.role_id FROM `user`
		LEFT JOIN
		(SELECT user_role.user_id, role.name as role_name, role.id as role_id from role LEFT JOIN user_role on role.id = user_role.role_id) as ur on user.id = ur.user_id 
		WHERE user.code = '".$code."' ";
		$result = mysqli_query($this->conn,$query);
		$row = mysqli_fetch_assoc($result);
		return $row;
	}
	function list_user(){
		$query="SELECT user.*, ur.role_name,ur.role_id FROM `user`
		LEFT JOIN
		(SELECT user_role.user_id, role.name as role_name, role.id as role_id from role LEFT JOIN user_role on role.id = user_role.role_id) as ur on user.id = ur.user_id";
		$result = mysqli_query($this->conn,$query);
		$data=array();
		while ( $row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
		
		return $data;
	}
	function insert_user_role($user_id,$role_id){
		$query="INSERT INTO user_role (user_id,role_id) VALUES('".$user_id."','".$role_id."')";
		$result = mysqli_query($this->conn,$query);
		return $result;
	}

	function delete_user($user_id){
		$query = "DELETE FROM user_role WHERE user_id = '".$user_id."'";
		
		$query2 ="DELETE FROM `user` WHERE id = '".$user_id."'";
		$result = mysqli_query($this->conn,$query);
		$result2 = mysqli_query($this->conn,$query2);
		return $result2;


	}
	
}

 ?>