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

switch ($role) {
	case 'admin':
		switch ($mod) {
			case 'product':
				include_once("controller/AdminProductController.php");
				$controller = new AdminProductController();
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
				break;
			case 'cpu':
				include_once('controller/AdminCpuController.php');
				$controller = new AdminCpuController();
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
				break;
			case 'ram':
				include_once('controller/AdminRamController.php');
				$controller = new AdminRamController();
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
				break;
			case 'status':
				include_once('controller/AdminStatusController.php');
				$controller = new AdminStatusController();
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
				break;
			case 'screen_size':
				include_once('controller/AdminScreenSizeController.php');
				$controller = new AdminScreenSizeController();
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
				break;
			case 'color':
				include_once('controller/AdminColorController.php');
				$controller = new AdminColorController();
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
				break;
			case 'type':
				include_once("controller/AdminTypeController.php");
				$controller = new AdminTypeController();
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
				break;
			case 'role':
				include_once("controller/AdminRoleController.php");
				$controller = new AdminRoleController();
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
				break;
			case 'slider':
				include_once("controller/AdminSliderController.php");
				$controller = new AdminSliderController();
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
				break;
			case 'operating_system':
				include_once("controller/AdminOperatingSystemController.php");
				$controller = new AdminOperatingSystemController();
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
				break;
			case 'branch':
				include_once("controller/AdminBranchController.php");
				$controller = new AdminBranchController();
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
				break;
			case 'user':
				include_once("controller/AdminUserController.php");
				$controller = new AdminUserController();
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
				break;
			case 'customer':
				include_once("controller/AdminCustomerController.php");
				$controller = new AdminCustomerController();
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
				break;
			case 'order':
				include_once("controller/AdminOrderController.php");
				$controller = new AdminOrderController();
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
				break;
			case 'statistical':
				include_once("controller/AdminStatisticalController.php");
				$controller = new AdminStatisticalController();
				switch ($act) {
					case 'getTopSale':
						$controller->getTopSale();
						break;
					case 'getTopUser':
						$controller->getTopUser();
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