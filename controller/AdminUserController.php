<?php 
include_once('model/Admin/User.php');
include_once('model/Admin/Role.php');

class AdminUserController{
	var $model_user;
	var $model_role;
	
	function __construct(){
		$this->model_user = new User();
		$this->model_role = new Role();
		
	}
 	function T_list(){
 		unset($_SESSION['value_old']);
 		$data = $this->model_user->list_user();
 		include_once('view/user/ListUser.php');
 	}
 	function add(){
 		
 		include_once('view/user/AddUser.php');
 	}
 	function role(){
 		$user_code = $_GET['code'];
 		$data = $this->model_user->find($user_code);
 		$role = $this->model_role->T_list();
 		include_once('view/user/role.php');
 	}
 	function store_role(){
 		$insert_user_role = $this->model_user->insert_user_role($_POST['user_id'],$_POST['role_id']);
 		if($insert_user_role){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=user&act=T_list');

 	}
 	function check_add($data){
 		$check_code = $this->model_user->find($data['code']);

 		if($check_code){
 			setcookie('code_same','abc',time()+1);
 			return false;
 		}

 		$check_email = $this->model_user->check_email_add($data);
 		if($check_email){
 			setcookie('email_same','abc',time()+1);
 			return false;
 		}

 		$check_phone = $this->model_user->check_phone_add($data);
 		if($check_phone){
 			setcookie('phone_same','abc',time()+1);
 			return false;
 		}

 		return true;
 	}

 	function store(){
 		$data = $_POST;

 		$data['password'] = md5($_POST['password']);
 		if($this->check_add($data)){
 		

	 		$status = $this->model_user->create($data);
	 		if($status){
	 			setcookie('true','abc',time()+1);
	 		}else{
	 			setcookie('false','abc',time()+1);
	 		}
	 		header('location: ?role=admin&mod=user&act=T_list');
 		}else{
 			
 			$_SESSION['value_old'] = $_POST;	
 			header('location: ?role=admin&mod=user&act=add');
 		}
 		
 	}
 	function edit(){
 		$code = $_GET['code'];
 		$role = $this->model_role->T_list();
 		$data = $this->model_user->find_full_role($code);
 	
 		include_once('view/user/EditUser.php');
 	}
 	function check_edit($data){

 		$check_email = $this->model_user->check_email_edit($data);
 		if($check_email){
 			setcookie('email_same','abc',time()+1);
 			return false;
 		}

 		$check_phone = $this->model_user->check_phone_edit($data);
 		if($check_phone){
 			setcookie('phone_same','abc',time()+1);
 			return false;
 		}

 		return true;
 	}
 	function update(){
 		$data = $_POST;
 		$role_id = $data['role_id'];
 		$user_id = $data['id'];
 		$update_user_role = $this->model_role->update_user_role($user_id,$role_id);

 		unset($data['role_id']);
 		if($this->check_edit($data)){
	 		
	 		$s = $this->model_user->update($data);
	 		
	 		if($s){
	 			setcookie('true','abc',time()+1);
	 		}else{
	 			setcookie('false','abc',time()+1);
	 		}
	 		header('location: ?role=admin&mod=user&act=T_list');
 		}else{
 				
 			header('location: ?role=admin&mod=user&act=edit&code='.$data['code'].' ');
 		}
 		
 	}
 	function delete(){
 		$code = $_GET['code'];
 		$user = $this->model_user->find($code);
 		$s = $this->model_user->delete_user($user['id']);
 	
 		if($s){
 			setcookie('true','abc',time()+1);
 		}else{
 			setcookie('false','abc',time()+1);
 		}
 		header('location: ?role=admin&mod=user&act=T_list');
	
 	}
}

?>