<?php 
include_once("Connection.php");
class model{
	var $conn;
	var $table;
	var $primary_key;
	function __construct(){
		$connect = new Connection();
		$this->conn = $connect->getConnect();
	}

	function find($id){
	    $query = "SELECT * FROM ".$this->table." WHERE ".$this->primary_key." = '".$id."' " ;
	    // echo $query;
	    // die;
	    $result = mysqli_query($this->conn, $query);

	    $row = mysqli_fetch_assoc($result);

	    return $row;

	}
	function T_list(){
		$sql = "SELECT * FROM ".$this->table." ";
		
		$data = array();
		$result = mysqli_query($this->conn, $sql);
		while($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}
		
		return $data;
	}
	function create($data){

		$fields = '';
		$values = '';

		foreach ($data as $key => $value) {
			$fields = $fields . $key . ',';
			$values = $values ."'" .$value. "',"; 
		}

		$fields = trim($fields, ',');
		$values = trim($values, ',');

		$query = "INSERT INTO ".$this->table." (".$fields.")
		VALUES (".$values.")";
		// echo $query;
		// die;
		$status = mysqli_query($this->conn, $query);
		return $status;
	}
	function update($data){
		$sql = '';

		foreach ($data as $key => $value) {
			if($key == $this->primary_key){
				continue;
			}else{
				$sql .= $key."=". "'" .$value. "',";
			}
		}
		
		$sql = trim($sql,',');	

		$query = "UPDATE ".$this->table." SET ".$sql." WHERE ".$this->primary_key." = '".$data[$this->primary_key]."' ";
		// echo $query;
		// die;
    	$status = mysqli_query($this->conn, $query);
  
    	return $status;
	}
	function delete($id){
		$sql = "DELETE FROM ".$this->table." WHERE ".$this->primary_key." = '".$id."' ";
		
		$result = mysqli_query($this->conn, $sql);
		return $result;
	}

}


 ?>