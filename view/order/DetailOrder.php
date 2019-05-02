<?php include_once('layouts/header.php') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			DETAIL ORDER
			<!--  <div class="#kq"></div> -->
		</h1>
   <!--  <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
  </ol> -->
</section>

<!-- Main content -->
<section class="content">
	<!-- Default box -->
	<div class="box">
		<div class="box-header with-border">
			<div class="row">
				<div class="col-xs-6">
					<h4>Order Info</h4>
					<table class="table table-striped table-bordered">
						
						<tbody>
							<tr>
								<td><b>Code order</b></td>
								<td><?php echo $data_order['code'] ?></td>
							</tr>
							<tr>
								<td><b>Created By</b></td>
								<td><?php echo $data_order['user_name'] ?></td>

							</tr>
						
							<tr>
								<td><b>Status</b></td>
								<td>
									<?php if($data_order['status'] == 1){
										echo "Đang chờ duyệt";
									}elseif($data_order['status']==2){
										echo "Đang chờ vận chuyển";
									}elseif($data_order['status']==3){
										echo "Đang vận chuyển";
									}elseif($data_order['status']==4){
										echo "Đã hoàn thành";
									} ?>
								</td>
							</tr>
						
						</tbody>
					</table>
					<h4>Ship Info</h4>
					<table class="table table-striped table-bordered">
						<tbody>
							
							<tr>
								<td><b>Name </b></td>
								<td><?php echo $data_order['csin_name'] ?></td>
								
							</tr>
							<tr>
								<td><b>Address</b></td>
								<td><?php echo $data_order['csin_address'] ?></td>
								
							</tr>
							<tr>
								<td><b>Phone</b></td>
								<td><?php echo $data_order['csin_phone'] ?></td>
								
							</tr>
							<tr>
								<td><b>Email</b></td>
								<td><?php echo $data_order['csin_email'] ?></td>
								
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-6">
					<h4>Customer Info</h4>
					<table class="table table-striped table-bordered">
						
						<tbody>
							<tr>
								<td><b>Name</b></td>
								<td><?php echo $data_order['customer_name'] ?></td>
							</tr>
							<tr>
								<td><b>Email</b></td>
								<td><?php echo $data_order['customer_email'] ?></td>
							</tr>
							<tr>
								<td><b>Address</b></td>
								<td><?php echo $data_order['customer_address'] ?></td>
							</tr>
							<tr>
								<td><b>Phone</b></td>
								<td><?php echo $data_order['customer_phone'] ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				
			</div>
			<h4>Order Detail</h4>
				<table class="table table-striped table-bordered">

						<thead>
							<tr>
								<th>Product Code</th>
								<th>Product Name</th>
								<th>Quantity</th>
								<th>Product Price</th>
								
							</tr>
							
						</thead>
						<tbody>
							<?php $tong = 0 ;
							foreach ($data_order_detail as $key => $value){
								$tong += $value['product_price'] * $value['quantity_buy'];
							?>

								<tr>
									<td><?php echo $value['product_code'] ?></td>
									<td><?php echo $value['product_name'] ?></td>
									<td><?php echo $value['quantity_buy'] ?></td>
									<td><?php echo number_format($value['product_price']) ?>đ</td>
									
								</tr>
							<?php } ?>
							
							<tr>
								<td><b style="margin-right: 15px;">Tổng:</b><?php echo number_format($tong) ?>đ</td>
							</tr>
						</tbody>
				</table>
			<?php if($data_order['status'] < 4 && $data_order['status'] > 1){ ?>
			<a class="btn btn-success" href="?role=admin&mod=order&act=process&order_id=<?php echo 
			$order_id ?>&status=<?=$data_order['status'] ?>">Xử lí</a>
			<?php } ?>

			<a href="?role=admin&mod=order&act=delete&order_id=<?php echo $order_id ?>&status=<?=$data_order['status'] ?>" class="btn btn-danger"></i>Hủy</a>
			
		<!-- 	<a class="btn btn-info" onclick="print()" href="">In</a> -->
			<a class="btn btn-primary" href="?role=admin&mod=order&act=T_list">Quay Lại</a>
		</div>

	</div>
	<!-- /.box -->
	<!-- modal -->
	<!-- Button trigger modal -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include_once('layouts/footer.php') ?>
<!-- <script>
	$(document).ready(function(){
		function print(){
			window.print();
		}
	})
	
</script> -->