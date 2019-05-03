<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			ADD USER
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
			<form action="?role=admin&mod=user&act=store" method="POST" role="form">
				<div class="form-group">
					<label for="">Code</label>
					<input type="text" class="form-control" name="code" autocomplete="off" required="required" placeholder="ABC" <?php if(isset($_SESSION['value_old'])){ ?> value="<?= $_SESSION['value_old']['code'] ?>" <?php } ?>>
				</div>
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" name="name" autocomplete="off" required="required" placeholder="Nguyễn Văn A" <?php if(isset($_SESSION['value_old'])){ ?> value="<?= $_SESSION['value_old']['name'] ?>" <?php } ?>>
				</div>
				<div class="form-group">
					<label for="">Phone</label>
					<input type="text" class="form-control" name="phone" autocomplete="off" required="required" placeholder="888-888-8888 " pattern="[0-9]{3}[-][0-9]{3}[-][0-9]{4}" maxlength="12" <?php if(isset($_SESSION['value_old'])){ ?> value="<?= $_SESSION['value_old']['phone'] ?>" <?php } ?>>
				</div>
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" class="form-control" name="email" autocomplete="off" required="required" placeholder="dev@gmail.com" <?php if(isset($_SESSION['value_old'])){ ?> value="<?= $_SESSION['value_old']['email'] ?>" <?php } ?>>
				</div>
				
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" name="password" autocomplete="off" required="required" <?php if(isset($_SESSION['value_old'])){ ?> value="<?= $_SESSION['value_old']['password'] ?>" <?php } ?>>
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

 