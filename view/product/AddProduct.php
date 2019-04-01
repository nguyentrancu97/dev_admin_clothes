<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Thêm Sản Phẩm
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
			<form action="?role=admin&mod=product&act=store" method="POST" enctype="multipart/form-data" role="form">
				<div class="row"> 
					<div class="col-xs-6">
						<div class="form-group">
							<label for="">Name</label>
							<input type="text" class="form-control" name="name" required="required">
						</div>
						<div class="form-group">
							<label for="">Producer</label>
							<select class="form-control" name="producer_id" >
								<?php foreach ($producer as $value) { ?>
									<option value="<?= $value['producer_id'] ?>"><?= $value['name'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Description</label>
							<input type="text" autocomplete="off" class="form-control" name="description"  required="required">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="">Img</label>
							<input type="file" class="form-control" name="img">
						</div>

						<div class="form-group">
							<label for="">Category</label>
							<select class="form-control" name="category_id">
								<?php foreach ($category as $value) { ?>
									<option value="<?= $value['category_id'] ?>"><?= $value['name'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Price</label>
							<input type="text" class="form-control" name="price"  required="required">
						</div>
					</div>
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

 