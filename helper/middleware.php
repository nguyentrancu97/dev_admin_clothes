<?php 
/**
* 
*/
class Middleware
{
	
	public function check_boss(){
		
		if(isset($_SESSION['isLogin']) ){
			if($_SESSION['isLogin']['role_code'] == 'BOSS'){
				return true;
			}else{
				return false;
			}
		}else{

			header('location: ?act=login');
		}
		
	}
	public function check_admin(){
		if(isset($_SESSION['isLogin']) ){
			if($_SESSION['isLogin']['role_code'] == 'ADMIN'){
				return true;
			}else{
				return false;
			}
		}else{
			
			header('location: ?act=login');
		}
		
	}
	public function check_employee(){
		if(isset($_SESSION['isLogin']) ){
			if($_SESSION['isLogin']['role_code'] == 'EMPLOYEE'){
				return true;
			}else{
				return false;
			}
		}else{
			
			header('location: ?act=login');
		}
		
	}

}
 ?>