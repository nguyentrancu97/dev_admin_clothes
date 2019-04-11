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
		$data['username'] = $_POST['username'];
		$data['password'] = $_POST['password'];

		$status = $this->model_login->checklogin($data);
		$_SESSION['isLogin'] = $status;

		if($_SESSION['isLogin']){
			header('Location: index.php?role=admin&mod=dashboard&act=dashboard');
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
