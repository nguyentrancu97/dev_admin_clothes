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
	$role = "admin";
	$mod = "dashboard";
	$act = "dashboard";
}

switch ($role) {
	case 'admin':
		switch ($mod) {
			case 'dashboard':
				include_once("controller/AdminDashboardController.php");
				$controller = new AdminDashboardController();
				switch ($act) {
					case 'dashboard':
						$controller->dashboard();
						break;
					
					default:
						# code...
						break;
				}
				break;
			case 'product':
				include_once("controller/AdminProductController.php");
				$controller = new AdminProductController();
				switch ($act) {
					case 'T_list':
						$controller->T_list();
						break;
					case 'add':
						$controller->ShowAddProduct();
						break;
					case 'check_add':
						$controller->check_add();
						break;
					case 'store':
						$controller->store();
						break;
					case 'edit':
						$controller->ShowEditProduct();
						break;
					case 'update':
						$controller->update();
						break;
					case 'list_size_color':
						$controller->ListSizeColor();
						break;
					case 'edit_size_color':
						$controller->EditSizeColor();
						break;
					case 'update_size_color':
						$controller->update_size_color();
						break;
					case 'delete':
						$controller->delete();
						break;
					case 'detail':
						$controller->detail();
						break;
					case 'add_size_color':
						$controller->add_size_color();
						break;
					case 'store_size_color':
						$controller->store_size_color();
						break;
					case 'delete_size_color':
						$controller->delete_size_color();
						break;
					default:
						# code...
						break;
				}
				break;
			case 'size':
				include_once('controller/AdminSizeController.php');
				$controller = new AdminSizeController();
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
			case 'category':
				include_once("controller/AdminCategoryController.php");
				$controller = new AdminCategoryController();
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
			case 'producer':
				include_once("controller/AdminProducerController.php");
				$controller = new AdminProducerController();
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