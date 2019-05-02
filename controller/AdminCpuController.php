<?php 
include_once('model/Admin/Cpu.php');
class AdminCpuController{
	var $model_cpu;
	function __construct(){
		$this->model_cpu = new Cpu();
	}
 	function T_list(){
 		unset($_SESSION['value_old']);
 		$data = $this->model_cpu->T_list();
 		include_once('view/cpu/ListCpu.php');
 	}
 	function add(){
 		include_once('view/cpu/AddCpu.php');
 	}
 	function check_add($data){
 		$check_code = $this->model_cpu->find($data['code']);

 		if($check_code){
 			setcookie('code_same','abc',time()+1);
 			return false;
 		}

 		return true;
 	}
 	function store(){
 		$data = $_POST;
 		if($this->check_add($data)){
	 		
	 		$status = $this->model_cpu->create($data);
	 		if($status){
	 			setcookie('true','abc',time()+1);
	 		}else{
	 			setcookie('false','abc',time()+1);
	 		}
	 		header('location: ?role=admin&mod=cpu&act=T_list');
	 	}else{
	 		$_SESSION['value_old'] = $data;	
 			header('location: ?role=admin&mod=cpu&act=add');
	 	}
 		
 	}
 	function edit(){
 		$code = $_GET['code'];
 		$data = $this->model_cpu->find($code);
 		include_once('view/cpu/EditCpu.php');
 	}
 	function update(){
 		$data = $_POST;
 		
 		$s = $this->model_cpu->update($data);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=cpu&act=T_list');
 		
 	}
 	function delete(){
 		$code = $_GET['code'];
 		$s = $this->model_cpu->delete($code);
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=cpu&act=T_list');
 		
 	}
}

?>