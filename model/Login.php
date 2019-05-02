<?php 
include_once('Connection.php');
	class Login{
		var $conn;
		function __construct(){
			$connect = new Connection();
			$this->conn = $connect->getConnect();
		}

		function checklogin($data){
			$query = "SELECT * FROM user 
			WHERE email = '".$data['email']."' AND password = '".$data['password']."' ";

			$result = mysqli_query($this->conn, $query);

		    $row = $result->fetch_assoc();

		    return $row;
		}
		
	}
 ?>