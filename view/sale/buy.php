<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Chọn sản size color
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
			<form action="?role=employee&mod=sale&act=add2cart" method="POST"  role="form">
				
				<input type="hidden" class="form-control" value="<?php echo $product['product_id'] ?>" name="product_id" >

				<input type="hidden" class="form-control" value="<?php echo $product['product_code'] ?>" name="product_code" >
				<input type="hidden" class="form-control" value="<?php echo $product['name'] ?>" name="product_name" >
				<input type="hidden" class="form-control" value="<?php echo $product['price'] ?>" name="price" >
				<div class="form-group">
					<label for="">Size</label>
					<select class="form-control" name="size_id" >
						<?php foreach ($sizes as $value) { ?>
							<option value="<?= $value['size_id'] ?>"><?= $value['size_name'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Color</label>
					<select class="form-control" name="color_id" >
						<?php foreach ($colors as $value) { ?>
							<option value="<?= $value['color_id'] ?>"><?= $value['color_name'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Quantity</label>
					<input type="number" autocomplete="off" class="form-control" name="quantity_buy"  required="required">
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
	

 