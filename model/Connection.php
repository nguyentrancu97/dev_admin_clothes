<?php
class Connection{
	var $conn;
	function getConnect(){
 		$serverName = "TRANDUCCU\SQLTRANCU"; //serverName\instanceName
 		$connectionInfo = array( 
 			"Database"=>"ShopClothes", 
 			"UID"=>"sa", 
 			"PWD"=>"123456",
 			'CharacterSet' => 'UTF-8',
 			'ReturnDatesAsStrings'=>true
 		);
 		$this->conn = sqlsrv_connect( $serverName, $connectionInfo);
 		if( $this->conn ) {
 			return $this->conn;
 		}else{
 			echo "Connection could not be established.<br />";
 			die( print_r( sqlsrv_errors(), true));
 		}
 	}
 }



?>