<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Sửa order
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
		<div class="box-header with-border" id="table">
			<form action="?role=admin&mod=order&act=update" method="POST" enctype="multipart/form-data" role="form">
				<div class="form-group">
					<label for=""></label>
					<input type="hidden" class="form-control" value="<?= $data['order_id'] ?>" name="order_id">
				</div>
				<div class="form-group">
					<label for="">Address Receive</label>
					<input type="text" class="form-control" value="<?= $data['address_receive'] ?>" name="address_receive" required="required">
				</div>
				<div class="form-group">
					<label for="">Phone Receive</label>
					<input type="text" class="form-control" value="<?= $data['phone_receive'] ?>" name="phone_receive" required="required">
				</div>
				<div class="form-group" style="margin-top: 38px;">

					<button type="submit" class="btn btn-primary">Edit</button>
				</div>
			</form>
		</div>

	</div>
	<!-- /.box -->
	<!-- modal -->
	<!-- Button trigger modal -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include_once('layouts/footer.php'); ?>	

 