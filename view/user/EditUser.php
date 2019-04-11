<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Sửa user
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
			<form action="?role=admin&mod=user&act=update" method="POST" enctype="multipart/form-data" role="form">
				<div class="form-group">
					<label for=""></label>
					<input type="hidden" class="form-control" value="<?= $data['user_id'] ?>" name="user_id" required="required">
				</div>
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" value="<?= $data['name'] ?>" name="name" required="required">
				</div>
				<div class="form-group">
					<label for="">Address</label>
					<input type="text" class="form-control" value="<?= $data['address'] ?>" name="address" required="required">
				</div>
				<div class="form-group">
					<label for="">DateOfBirth</label>
					<input type="date" class="form-control" value="<?= $data['dateofbirth'] ?>" name="dateofbirth" required="required">
				</div>
				
				<div class="form-group">
					<label for="">User Name</label>
					<input type="text" class="form-control" value="<?= $data['username'] ?>" name="username" required="required">
				</div>
				
				<div class="form-group">
					<label for="">Role</label>
					<select class="form-control" name="role" >
						
						<option value="0" <?php if($data['role'] == 0){ ?> selected <?php } ?> >Admin</option>
						<option value="1" <?php if($data['role'] == 1){ ?> selected <?php } ?> >Employee</option>
						<option value="2" <?php if($data['role'] == 2){ ?> selected <?php } ?> >Shipper</option>
						
					</select>
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

 