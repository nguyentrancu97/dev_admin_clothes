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
}

 ?>