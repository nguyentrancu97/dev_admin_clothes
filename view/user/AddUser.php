<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Thêm user
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
			<form action="?role=admin&mod=user&act=store" method="POST" enctype="multipart/form-data" role="form">
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" name="name" required="required">
				</div>
				<div class="form-group">
					<label for="">User Name</label>
					<input type="text" class="form-control" name="username" required="required">
				</div>
				<div class="form-group">
					<label for="">Address</label>
					<input type="text" class="form-control" name="address" required="required">
				</div>
				<div class="form-group">
					<label for="">DateOfBirth</label>
					<input type="date" class="form-control" name="dateofbirth" required="required">
				</div>
				<?php if(isset($_SESSION['isLogin']) && $_SESSION['isLogin']['role'] == 0){ ?>
					<div class="form-group">
						<label for="">Brand</label>
						<select class="form-control" name="branch_id" >
							<?php foreach ($branch as $value) { ?>
								<option value="<?= $value['branch_id'] ?>"><?= $value['name'] ?></option>
							<?php } ?>
						</select>
					</div>
				<?php }else{ ?>
				<div class="form-group">
					<label for="">Brand</label>
					<select class="form-control" name="branch_id" >
						<?php foreach ($branch as $value) { ?>
									<option 
									<?php if($value['branch_id'] == $_SESSION['isLogin']['branch_id']){?> 
										selected 
									<?php }else{?>
										disabled="disabled"
									<?php } ?> 
									value="<?= $value['branch_id'] ?>"><?= $value['name'] ?></option>
								<?php } ?>
					</select>
				</div>
				<?php } ?>
				
				<div class="form-group">
					<label for="">Role</label>
					<select class="form-control" name="role" >
						<?php if(isset($_SESSION['isLogin']) && $_SESSION['isLogin']['role'] == 0){ ?>
						<option value="0">System Admin</option>
					<?php } ?>
						<option value="1">Admin</option>
						<option value="2">Employee</option>
						
					</select>
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

 