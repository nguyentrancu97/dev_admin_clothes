<?php 
include_once('Connection.php');
	class Login{
		var $conn;
		function __construct(){
			$connect = new Connection();
			$this->conn = $connect->getConnect();
		}

		function checklogin($data){
			$query = "SELECT users.name as user_name, users.role, branchs.name as branch_name, branchs.branch_id 
			FROM users 
			INNER JOIN branchs ON users.branch_id = branchs.branch_id 
			WHERE username = '".$data['username']."' AND password = '".$data['password']."' ";

			
			$result = sqlsrv_query($this->conn, $query);

		    $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC);

		    return $row;
		}
		
	}
 ?>