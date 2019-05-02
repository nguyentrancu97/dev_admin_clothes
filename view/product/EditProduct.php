<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			EDIT PRODUCT
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
	<!-- ?role=admin&mod=product&act=store -->
	<div class="box">
		<div class="box-header with-border" id="table">
			<form action="?role=admin&mod=product&act=update" method="POST" enctype="multipart/form-data" role="form" id="form_add">
				<div class="row"> 
					<div class="col-xs-6">
						<input type="hidden" class="form-control" value="<?php echo $row['id']; ?>" name="id" >
						<div class="form-group">
							<label for="">Code</label>
							<input type="text" class="form-control" name="code" 
							value="<?php echo $row['code']; ?>" required="required" autocomplete="off" readonly>
						</div>

						<div class="form-group">
							<label for="">Name</label>
							<input type="text" class="form-control" name="name"
							 value="<?php echo $row['name']; ?>" required="required" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="">Quantity</label>
							<input type="text" class="form-control" name="quantity" 
							value="<?php echo $row['quantity']; ?>" required="required" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="">Price</label>
							<input type="text" class="form-control" name="price" 
							value="<?php echo $row['price']; ?>" required="required" autocomplete="off">
						</div>
						
						<div class="form-group">
							<label for="">Type</label>
							<select class="form-control" name="type_id" >
								<?php foreach ($type as $value) { ?>
									<option <?php if($value['id'] == $row['type_id']){?> selected <?php } ?> value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Color</label>
							<select class="form-control" name="color_id" >
								<?php foreach ($color as $value) { ?>
									<option <?php if($value['id'] == $row['color_id']){?> selected <?php } ?> value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Ram</label>
							<select class="form-control" name="ram_id" >
								<?php foreach ($ram as $value) { ?>
									<option <?php if($value['id'] == $row['ram_id']){?> selected <?php } ?> value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
								<?php } ?>
							</select>
						</div>
						
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="">Image</label>
							<input type="file" name="image">
						</div>
						<div class="form-group">
							<label for="">Status</label>
							<select class="form-control" name="status_id" >
								<?php foreach ($status as $value) { ?>
									<option <?php if($value['id'] == $row['status_id']){?> selected <?php } ?> value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Operating System</label>
							<select class="form-control" name="operating_system_id" >
								<?php foreach ($operating_system as $value) { ?>
									<option <?php if($value['id'] == $row['operating_system_id']){?> selected <?php } ?> value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Cpu</label>
							<select class="form-control" name="cpu_id" >
								<?php foreach ($cpu as $value) { ?>
									<option <?php if($value['id'] == $row['cpu_id']){?> selected <?php } ?> value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Brand</label>
							<select class="form-control" name="branch_id" >
								<?php foreach ($branch as $value) { ?>
									<option <?php if($value['id'] == $row['branch_id']){?> selected <?php } ?> value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Screen Size</label>
							<select class="form-control" name="screen_size_id" >
								<?php foreach ($screen_size as $value) { ?>
									<option <?php if($value['id'] == $row['screen_size_id']){?> selected <?php } ?> value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
								<?php } ?>
							</select>
						</div>
					</div>

				</div>
				<div class="form-group">
					<label for="">Description</label>
					<textarea id="description" name="description" required="required">
						<?php echo $row['description']; ?>
					</textarea>

				</div>
				<div class="form-group" style="margin-top: 38px;">

					<button type="submit" class="btn btn-primary">EDIT</button>
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
<script type="text/javascript">
	CKEDITOR.replace( 'description' );
</script>






 


