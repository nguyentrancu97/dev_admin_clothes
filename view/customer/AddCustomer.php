<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Thêm customer
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
			<form action="?role=admin&mod=customer&act=store" method="POST" enctype="multipart/form-data" role="form">
				<div class="form-group">
					<label for="">Code</label>
					<input type="text" class="form-control" name="code" required="required" placeholder="ABC" autocomplete="off" <?php if(isset($_SESSION['value_old'])){ ?> value="<?= $_SESSION['value_old']['code'] ?>" <?php } ?>>
				</div>
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" name="name" required="required" placeholder="Nguyễn Văn A" autocomplete="off" <?php if(isset($_SESSION['value_old'])){ ?> value="<?= $_SESSION['value_old']['name'] ?>" <?php } ?>>
				</div>
				<div class="form-group">
					<label for="">Address</label>
					<input type="text" class="form-control" name="address" required="required" placeholder="Hà Nội" autocomplete="off" <?php if(isset($_SESSION['value_old'])){ ?> value="<?= $_SESSION['value_old']['address'] ?>" <?php } ?>>
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" class="form-control" name="email" required="required" placeholder="dev@gmail.com" autocomplete="off" <?php if(isset($_SESSION['value_old'])){ ?> value="<?= $_SESSION['value_old']['email'] ?>" <?php } ?>>
				</div>
				<div class="form-group">
					<label for="">Phone</label>
					<input type="text" class="form-control" name="phone" required="required" placeholder="888-888-8888 " pattern="[0-9]{3}[-][0-9]{3}[-][0-9]{4}" maxlength="12" minlength="10" autocomplete="off" <?php if(isset($_SESSION['value_old'])){ ?> value="<?= $_SESSION['value_old']['phone'] ?>" <?php } ?>>
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" name="password" required="required" <?php if(isset($_SESSION['value_old'])){ ?> value="<?= $_SESSION['value_old']['password'] ?>" <?php } ?>>
				</div>
				
				<div class="form-group" style="margin-top: 38px;">

					<button type="submit" class="btn btn-primary">Create</button>
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

 