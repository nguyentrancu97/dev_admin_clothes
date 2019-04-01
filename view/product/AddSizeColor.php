<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Thêm size color
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
			<form action="?role=admin&mod=product&act=store_size_color" method="POST" enctype="multipart/form-data" role="form">
				<div class="form-group">
					<label for="">Product ID</label>
					<input type="text" class="form-control" value="<?php echo $product_id ?>" name="product_id" required="required" readonly>
				</div>
				<div class="form-group">
					<label for="">Size</label>
					<select class="form-control" name="size_id" >
						<?php foreach ($size as $value) { ?>
							<option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Color</label>
					<select class="form-control" name="color_id" >
						<?php foreach ($color as $value) { ?>
							<option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Quantity</label>
					<input type="text" autocomplete="off" class="form-control" name="quantity"  required="required">
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

 