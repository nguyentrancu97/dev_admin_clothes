<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Sửa Size Color
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
			<form action="?role=admin&mod=product&act=update_size_color" method="POST" enctype="multipart/form-data" role="form">
				<div class="row">
					<div class="col-xs-6">
						<div class="form-group">
							<label for="">Id</label>
							<input type="text" class="form-control" value="<?= $row['id'] ?>" name="id" readonly>
						</div>
						<div class="form-group">
							<label for="">Product_id</label>
							<input type="text" class="form-control" value="<?= $row['product_id'] ?>" name="product_id" readonly>
						</div>
						<div class="form-group">
							<label for="">Quantity</label>
							<input type="text" class="form-control" value="<?= $row['quantity'] ?>" name="quantity">
						</div>

					</div>
					<div class="col-xs-6">						
						
						<div class="form-group">
							<label for="">Size</label>
							<select class="form-control" name="size_id" >

								<?php foreach ($size as $value) { ?>
									<option 
									<?php if($value['id'] == $row['size_id']){?> 
										selected 
									<?php }else{?>
										disabled="disabled"
									<?php } ?> 
									value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
								<?php } ?>
							</select>

						</div>
						<div class="form-group">
							<label for="">Color</label>
							<select class="form-control" name="color_id" >
								<?php foreach ($color as $value) { ?>
									<option 
									<?php if($value['id'] == $row['color_id']){?> 
										selected 
									<?php }else{?>
										disabled="disabled"
									<?php } ?> 
									value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
								<?php } ?>
							</select>

						</div>
					</div>
				</div>
				<div class="form-group" style="margin-top: 38px;">

					<button type="submit" class="btn btn-primary">Submit</button>
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

