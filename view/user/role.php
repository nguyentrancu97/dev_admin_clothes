<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			DETAIL USER
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
			<form action="?role=admin&mod=user&act=store_role" method="POST" role="form">
				
				<input type="hidden" name="user_id" value="<?php echo $data['id'] ?>">
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" id="name" value="<?php echo $data['name'] ?>" readonly>
				</div>
				<div class="form-group">
					<label for="">Role</label>
					<select class="form-control" name="role_id" >
						<?php foreach ($role as $value) { ?>
							<option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
						<?php } ?>
					</select>
				</div>
				
			
				<button type="submit" class="btn btn-primary">Create</button>
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

 