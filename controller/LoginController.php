<?php 
include_once('model/Login.php');
class LoginController
{
	var $model_login;
	function __construct(){
		$this->model_login = new Login();
	}
	function Showlogin(){
		include_once('view/login/login.php');
	}

	function checklogin(){
		$data = array();
		$data['email'] = $_POST['email'];
		$data['password'] = md5($_POST['password']);

		$status = $this->model_login->checklogin($data);
		
		$_SESSION['isLogin'] = $status;
		
		if($_SESSION['isLogin']['role_code'] == 'BOSS' || $_SESSION['isLogin']['role_code'] == 'ADMIN' ){
			header('Location: index.php?role=admin&mod=product&act=T_list');
		}elseif($_SESSION['isLogin']['role_code'] == 'EMPLOYEE'){
			header('Location: index.php?role=admin&mod=order&act=T_list');
		}else{
			setcookie('false','login',time()+1);
			header('Location: index.php?act=login');
		}
		
		
	}

	function logout(){
		session_destroy();
		header("Location: ?role&mod&act=login");
	}

}


 ?>
