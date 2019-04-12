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
		<div class="box-header with-border" >
			<form action="?role=admin&mod=product&act=store_size_color" method="POST" enctype="multipart/form-dataSC" role="form">
				<div class="form-group">
					<label for="">Product ID</label>
					<input type="hidden" class="form-control" value="<?php echo $product_id ?>" name="product_id" required="required" readonly>
				</div>
				<div class="form-group">
					<label for="">Size</label>
					<select class="form-control" name="size_id" >
						<?php foreach ($size as $value) { ?>
							<option value="<?= $value['id'] ?>"

								<?php if(isset($_SESSION['dataSC']) && $value['id'] == $_SESSION['dataSC']['size_id']){?>
									selected
								<?php } ?>
								><?= $value['name'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Color</label>
					<select class="form-control" name="color_id" >
						<?php foreach ($color as $value) { ?>
							<option value="<?= $value['id'] ?>"

								<?php if(isset($_SESSION['dataSC']) && $value['id'] == $_SESSION['dataSC']['color_id']){?>
									selected
								<?php } ?>

								><?= $value['name'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Branch</label>
					<select class="form-control" name="branch_id" >
						<?php foreach ($branch as $value) { ?>
							<option value="<?= $value['branch_id'] ?>"

								<?php if(isset($_SESSION['dataSC']) && $value['branch_id'] == $_SESSION['dataSC']['branch_id']){?>
									selected
								<?php } ?>

								><?= $value['name'] ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label for="">Quantity</label>
					<input type="text" autocomplete="off" class="form-control" name="quantity" value="<?php if(isset($_SESSION['dataSC'])) echo $_SESSION['dataSC']['quantity'] ?>" required="required">
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
<?php if(isset($_COOKIE['Trung'])){ ?>
	<script type="text/javascript">
		$(document).ready(function(){
			toastr.error('Thêm Thất bại!! Trùng');
			$("select[name='color_id']").css("border-color","red");
			$("select[name='size_id']").css("border-color","red");
			$("select[name='branch_id']").css("border-color","red");
		})
	</script>
<?php } ?>
 