<?php 
include_once('Connection.php');
	class Login{
		var $conn;
		function __construct(){
			$connect = new Connection();
			$this->conn = $connect->getConnect();
		}

		function checklogin($data){
			$query = "SELECT user.*,ur.role_id,ur.role_code FROM `user`
			LEFT JOIN
			(SELECT user_role.user_id, role.code as role_code, role.id as role_id from role LEFT JOIN user_role on role.id = user_role.role_id) as ur on user.id = ur.user_id
			WHERE email = '".$data['email']."' and `password` = '".$data['password']."' ";

			$result = mysqli_query($this->conn, $query);

		    $row = $result->fetch_assoc();

		    return $row;
		}
		
	}
 ?>