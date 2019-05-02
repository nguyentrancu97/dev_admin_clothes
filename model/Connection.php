<?php
class Connection{
	var $conn;
	function getConnect(){
 		$severname = "localhost";

		$username = "root";

		$password = "";

		$dbname = "dev_web_economic";

		$conn = mysqli_connect($severname,$username,$password,$dbname);
		$conn->set_charset("utf8");

		return $conn;
 		
 	}
 }



?>