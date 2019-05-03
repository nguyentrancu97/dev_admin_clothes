<?php 
session_start();

$role = "";
$mod = "";
$act = "";

if(isset($_GET['mod']) && isset($_GET['act']) && isset($_GET['role'])){
	$role = $_GET['role'];
	$mod = $_GET['mod'];
	$act = $_GET['act'];
}else{
	
	$act = "login";
	
}
include_once('helper/middleware.php');
$middleware = new Middleware();
switch ($role) {
	case 'admin':

		switch ($mod) {
			
			case 'product':
				include_once("controller/AdminProductController.php");
				$controller = new AdminProductController();
			if($middleware->check_boss() || $middleware->check_admin()){

				switch ($act) {
					case 'T_list':
						$controller->T_list();
						break;
					case 'add':
						$controller->add();
						break;
					case 'store':
						$controller->store();
						break;
					case 'edit':
						$controller->edit();
						break;
					case 'update':
						$controller->update();
						break;
					case 'delete':
						$controller->delete();
						break;
					case 'detail':
						$controller->detail();
						break;
					default:
						# code...
						break;
				}
			}
				break;
			case 'cpu':
				include_once('controller/property/AdminCpuController.php');
				$controller = new AdminCpuController();
			if($middleware->check_boss() || $middleware->check_admin()){
				switch ($act) {
					case 'T_list':
						$controller->T_list();
						break;
					case 'add':
						$controller->add();
						break;
					case 'store':
						$controller->store();
						break;
					case 'edit':
						$controller->edit();
						break;
					case 'update':
						$controller->update();
						break;
					case 'delete':
						$controller->delete();
						break;
					default:
						# code...
						break;
					}
				}
				break;
			case 'ram':
				include_once('controller/property/AdminRamController.php');
				$controller = new AdminRamController();
			if($middleware->check_boss() || $middleware->check_admin()){
				switch ($act) {
					case 'T_list':
						$controller->T_list();
						break;
					case 'add':
						$controller->add();
						break;
					case 'store':
						$controller->store();
						break;
					case 'edit':
						$controller->edit();
						break;
					case 'update':
						$controller->update();
						break;
					case 'delete':
						$controller->delete();
						break;
					default:
						# code...
						break;
				}
			}
				break;
			case 'status':
				include_once('controller/property/AdminStatusController.php');
				$controller = new AdminStatusController();
			if($middleware->check_boss() || $middleware->check_admin()){
				switch ($act) {
					case 'T_list':
						$controller->T_list();
						break;
					case 'add':
						$controller->add();
						break;
					case 'store':
						$controller->store();
						break;
					case 'edit':
						$controller->edit();
						break;
					case 'update':
						$controller->update();
						break;
					case 'delete':
						$controller->delete();
						break;
					default:
						# code...
						break;
					}
				}
				break;
			case 'screen_size':
				include_once('controller/property/AdminScreenSizeController.php');
				$controller = new AdminScreenSizeController();
			if($middleware->check_boss() || $middleware->check_admin()){
				switch ($act) {
					case 'T_list':
						$controller->T_list();
						break;
					case 'add':
						$controller->add();
						break;
					case 'store':
						$controller->store();
						break;
					case 'edit':
						$controller->edit();
						break;
					case 'update':
						$controller->update();
						break;
					case 'delete':
						$controller->delete();
						break;
					default:
						# code...
						break;
					}
				}
				break;
			case 'color':
				include_once('controller/property/AdminColorController.php');
				$controller = new AdminColorController();
				if($middleware->check_boss() || $middleware->check_admin()){
				switch ($act) {
					case 'T_list':
						$controller->T_list();
						break;
					case 'add':
						$controller->add();
						break;
					case 'store':
						$controller->store();
						break;
					case 'edit':
						$controller->edit();
						break;
					case 'update':
						$controller->update();
						break;
					case 'delete':
						$controller->delete();
						break;
					default:
						# code...
						break;
					}
				}
				break;
			case 'type':
				include_once("controller/property/AdminTypeController.php");
				$controller = new AdminTypeController();
				if($middleware->check_boss() || $middleware->check_admin()){
				switch ($act) {
					case 'T_list':
						$controller->T_list();
						break;
					case 'add':
						$controller->add();
						break;
					case 'store':
						$controller->store();
						break;
					case 'edit':
						$controller->edit();
						break;
					case 'update':
						$controller->update();
						break;
					case 'delete':
						$controller->delete();
						break;
					default:
						# code...
						break;
					}
				}
				break;
			case 'role':
				include_once("controller/property/AdminRoleController.php");
				$controller = new AdminRoleController();
				if($middleware->check_boss() || $middleware->check_admin()){
				switch ($act) {
					case 'T_list':
						$controller->T_list();
						break;
					case 'add':
						$controller->add();
						break;
					case 'store':
						$controller->store();
						break;
					case 'edit':
						$controller->edit();
						break;
					case 'update':
						$controller->update();
						break;
					case 'delete':
						$controller->delete();
						break;
					default:
						# code...
						break;
					}
				}
				break;
			case 'slider':
				include_once("controller/property/AdminSliderController.php");
				$controller = new AdminSliderController();
			if($middleware->check_boss() || $middleware->check_admin()){
				switch ($act) {
					case 'T_list':
						$controller->T_list();
						break;
					case 'add':
						$controller->add();
						break;
					case 'store':
						$controller->store();
						break;
					case 'edit':
						$controller->edit();
						break;
					case 'update':
						$controller->update();
						break;
					case 'delete':
						$controller->delete();
						break;
					default:
						# code...
						break;
					}
				}
				break;
			case 'operating_system':
				include_once("controller/property/AdminOperatingSystemController.php");
				$controller = new AdminOperatingSystemController();
			if($middleware->check_boss() || $middleware->check_admin()){
				switch ($act) {
					case 'T_list':
						$controller->T_list();
						break;
					case 'add':
						$controller->add();
						break;
					case 'store':
						$controller->store();
						break;
					case 'edit':
						$controller->edit();
						break;
					case 'update':
						$controller->update();
						break;
					case 'delete':
						$controller->delete();
						break;
					default:
						# code...
						break;
					}
				}
				break;
			case 'branch':
				include_once("controller/property/AdminBranchController.php");
				$controller = new AdminBranchController();
			if($middleware->check_boss() || $middleware->check_admin()){
				switch ($act) {
					case 'T_list':
						$controller->T_list();
						break;
					case 'add':
						$controller->add();
						break;
					case 'store':
						$controller->store();
						break;
					case 'edit':
						$controller->edit();
						break;
					case 'update':
						$controller->update();
						break;
					case 'delete':
						$controller->delete();
						break;
					default:
						# code...
						break;
					}
				}
				break;
			case 'user':
				include_once("controller/AdminUserController.php");
				$controller = new AdminUserController();
				if($middleware->check_boss() || $middleware->check_admin()){
				switch ($act) {
					case 'T_list':
						$controller->T_list();
						break;
					case 'role':
						$controller->role();
						break;
					case 'store_role':
						$controller->store_role();
						break;
					case 'add':
						$controller->add();
						break;
					case 'store':
						$controller->store();
						break;
					case 'edit':
						$controller->edit();
						break;
					case 'update':
						$controller->update();
						break;
					case 'delete':
						$controller->delete();
						break;
					default:
						# code...
						break;
					}
				}
				break;
			case 'customer':
				include_once("controller/AdminCustomerController.php");
				$controller = new AdminCustomerController();
				if($middleware->check_boss() || $middleware->check_admin()){
				switch ($act) {
					case 'T_list':
						$controller->T_list();
						break;
					case 'add':
						$controller->add();
						break;
					case 'store':
						$controller->store();
						break;
					case 'edit':
						$controller->edit();
						break;
					case 'update':
						$controller->update();
						break;
					case 'delete':
						$controller->delete();
						break;
					default:
						# code...
						break;
					}
				}
				break;
			case 'order':
				include_once("controller/AdminOrderController.php");
				$controller = new AdminOrderController();
			if($middleware->check_boss() || $middleware->check_admin() || $middleware->check_employee()){
				switch ($act) {
					case 'T_list':
						$controller->T_list();
						break;
					case 'add':
						$controller->add();
						break;
					case 'store':
						$controller->store();
						break;
					case 'edit':
						$controller->edit();
						break;
					case 'update':
						$controller->update();
						break;
					case 'delete':
						$controller->delete();
						break;
					case 'detail':
						$controller->detail();
						break;
					case 'process':
						$controller->process();
						break;
					case 'huy':
						$controller->huy();
						break;
					case 'filter':
						$controller->filter();
						break;
					case 'filter_date':
						$controller->filter_date();
						break;
					default:
						# code...
						break;
					}
				}
				break;

			case 'statistical':
				include_once("controller/AdminStatisticalController.php");
				$controller = new AdminStatisticalController();
			if($middleware->check_boss()){
				switch ($act) {
					case 'getTopSale':
						$controller->getTopSale();
						break;
					case 'getTopStaff':
						$controller->getTopStaff();
						break;
					case 'order_by_staff':
						$controller->order_by_staff();
						break;
					default:
						# code...
						break;
					}
				}
				break;
		}
		break;
	
	case '':
		switch ($mod) {
			case '':
				include_once("controller/LoginController.php");
				$controller = new LoginController();
				switch ($act) {
					
					case 'login':
						$controller->Showlogin();
						break;
					case 'check_login':
						$controller->checklogin();
						break;
					case 'logout':
						$controller->logout();
						break;
					default:
						# code...
						break;
				}
				break;
			
			default:
				# code...
				break;
		}
		break;
	default:
		# code...
		break;
}
 ?>