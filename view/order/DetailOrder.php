<?php include_once('layouts/header.php') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Quản lí order
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
				<div class="col-xs-3">
					<table class="table table-hover table-bordered">
						<tbody>
							<tr>
								<td><b>Mã order</b></td>
								<td><?php echo $data_customer['order_id'] ?></td>
							</tr>
							<tr>
								<td><b>Tên khách hàng</b></td>
								<td><?php echo $data_customer['customer_name'] ?></td>
							</tr>
							<tr>
								<td><b>Tên đăng nhập</b></td>
								<td><?php echo $data_customer['username'] ?></td>
							</tr>
							<tr>
								<td><b>Địa chỉ</b></td>
								<td><?php echo $data_customer['customer_address'] ?></td>
							</tr>
							<tr>
								<td><b>Ngày sinh</b></td>
								<td><?php echo $data_customer['dateofbirth'] ?></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-xs-9">
					<table class="table table-hover table-bordered">
						<tbody>
							<tr>
								<td style="width: 30%; font-weight: 600;">Địa chỉ nhận</td>
								<td><?php echo $data_order_detail[0]['address_receive'] ?></td>
							</tr>
							<tr>
								<td style="width: 30%;font-weight: 600;">Điện thoại nhận</td>
								<td><?php echo $data_order_detail[0]['phone_receive'] ?></td>
							</tr>
						</tbody>
					</table>
					<table class="table table-hover table-bordered">
						<thead>
							<tr>
								<th>Tên Sản phẩm</th>
								<th>Size</th>
								<th>Color</th>
								<th>Số lượng</th>
								<th>Giá/1</th>
							</tr>
							
						</thead>
						<tbody>
							<?php $tong = 0 ;
							foreach ($data_order_detail as $key => $value){
								$tong += $value['price'] * $value['quantity_buy'];
							?>

								<tr>
									<td><?php echo $value['product_name'] ?></td>
									<td><?php echo $value['size_name'] ?></td>
									<td><?php echo $value['color_name'] ?></td>
									<td><?php echo $value['quantity_buy'] ?></td>
									<td><?php echo $value['price'] ?></td>
								</tr>
							<?php } ?>
							
							<tr>
								<td><b style="margin-right: 15px;">Tổng:</b><?php echo $tong ?>đ</td>
							</tr>
						</tbody>
					</table>

				</div>
			</div>
			<?php if($data_order_detail[0]['state'] == 0){ 	?>

			<a class="btn btn-success" href="?role=admin&mod=order&act=process&order_id=<?php echo 
			$order_id ?>">Xử lí</a>

			<?php } ?>
			
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