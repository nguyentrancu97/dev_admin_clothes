<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Sửa category
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
			<form action="?role=admin&mod=category&act=update" method="POST" enctype="multipart/form-data" role="form">
				<div class="form-group">
					<label for=""></label>
					<input type="hidden" class="form-control" value="<?= $data['category_id'] ?>" name="category_id">
				</div>
				<div class="form-group">
					<label for="">Category Name</label>
					<input type="text" class="form-control" value="<?= $data['name'] ?>" name="name" required="required">
				</div>
				<div class="form-group">
					<label for="">Parent Name</label>
					<select class="form-control" name="parent_id" >
						<option value="0">Parent</option>
						<?php foreach ($parent as $value) { ?>
							<option 
							<?php if($value['category_id']==$data['parent_id'] ){ ?>
								selected
							<?php } ?>
							value="<?= $value['category_id'] ?>"><?= $value['name'] ?>
						<?php } ?>	
						</option>
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

 