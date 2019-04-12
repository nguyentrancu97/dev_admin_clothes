<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Sửa sản phẩm
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
			<a href="?role=admin&mod=product&act=list_size_color&product_id=<?= $id ?>" style="margin-bottom: 20px;" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;&nbsp;Size và color</a>
			<form action="?role=admin&mod=product&act=update" method="POST" enctype="multipart/form-data" role="form">	
				<div class="form-group">
					<label for="">Product_id</label>
					<input type="text" class="form-control" value="<?= $row['product_id'] ?>" name="product_id" readonly>
				</div>
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" value="<?= $row['name'] ?>" name="name" required="required">
				</div>
				<div class="form-group">
					<label for="">Code</label>
					<input type="text" class="form-control" value="<?= $row['product_code'] ?>" name="product_code" required="required">
				</div>
				<div class="form-group">
					<label for="">Img</label>
					<input type="file" class="form-control" name="img">
				</div>
				
				<div class="form-group">
					<label for="">Producer</label>
					<select class="form-control" name="producer_id" >
						<?php foreach ($producer as $value) { ?>
							<option <?php if($value['producer_id'] == $row['producer_id']){?> selected <?php } ?> value="<?= $value['producer_id'] ?>"><?= $value['name'] ?></option>
						<?php } ?>
					</select>

				</div>
				<div class="form-group">
					<label for="">Category</label>
					<select class="form-control" name="category_id">
						<?php foreach ($category as $value) { ?>
							<option <?php if($value['category_id'] == $row['category_id']){?> selected <?php } ?> value="<?= $value['category_id'] ?>"><?= $value['name'] ?></option>
						<?php } ?>
					</select>

				</div>

				<div class="form-group">
					<label for="">Description</label>
					<input type="text" autocomplete="off" value="<?= $row['description'] ?>" class="form-control" name="description"  required="required">
				</div>

				<div class="form-group">
					<label for="">Price</label>
					<input type="text" class="form-control" value="<?= $row['price'] ?>" name="price"  required="required">
				</div>
				<div class="form-group" style="margin-top: 38px;">
					<?php if(isset($_SESSION['isLogin']) && $_SESSION['isLogin']['role'] == 0){ ?>
					<button type="submit" class="btn btn-primary">Edit</button>
					<?php } ?>
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

