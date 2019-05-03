
<?php 
include_once('model/Admin/Statistical.php');
include_once('model/Admin/User.php');
class AdminStatisticalController{
	var $model_statistical;
	var $model_user;
	function __construct(){
		$this->model_statistical = new Statistical();
		$this->model_user = new User();
	}
 	function getTopSale(){
 		$data = $this->model_statistical->getTopSale();
 		
 		include_once('view/statistical/topsale.php');
 	}
 	function getTopStaff(){
 		$data = $this->model_statistical->getTopStaff();
 		include_once('view/statistical/topstaff.php');
 	}
 	function order_by_staff(){
 		$staff_id = $_GET['staff_id'];
 		$user  = $this->model_user->getUserById($staff_id);
 		$data = $this->model_statistical->order_by_staff($staff_id);
 		include_once('view/statistical/order_by_staff.php');
 	}
}

?>
