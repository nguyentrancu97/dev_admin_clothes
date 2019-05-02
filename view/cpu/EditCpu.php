<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			EDIT CPU
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
			<form action="?role=admin&mod=cpu&act=update" method="POST" enctype="multipart/form-data" role="form">
				<div class="form-group">
					<label for="">Code</label>
					<input type="text" class="form-control" value="<?= $data['code'] ?>" name="code" required="required" readonly autocomplete="off">
				</div>
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" value="<?= $data['name'] ?>" name="name" required="required" autocomplete="off">
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

 