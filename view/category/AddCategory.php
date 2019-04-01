<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Thêm category
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
			<form action="?role=admin&mod=category&act=store" method="POST" enctype="multipart/form-data" role="form">
				<div class="form-group">
					<label for="">Category Name</label>
					<input type="text" class="form-control" name="name" required="required">
				</div>
				<div class="form-group">
					<label for="">Parent Name</label>
					<select class="form-control" name="parent_id" >
						<option value="0">Parent</option>
						<?php foreach ($category as $value) { ?>
							<option 
							<?php if($value['parent_id'] == 0){ ?> 
								value="<?= $value['category_id'] ?>"><?= $value['name'] ?>
							<?php } ?>	
							</option>
						<?php } ?>
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

 