
<?php 
include_once('model/Admin/Statistical.php');
class AdminStatisticalController{
	var $model_statistical;
	function __construct(){
		$this->model_statistical = new Statistical();
	}
 	function getTopSale(){
 		$data = $this->model_statistical->getTopSale();
 		
 		include_once('view/statistical/topsale.php');
 	}
 	function getTopUser(){
 		$data = $this->model_statistical->getTopUser();
 		include_once('view/statistical/getTopUser.php');
 	}
}

?>
