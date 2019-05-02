<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			ADD PRODUCT
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
			<form action="?role=admin&mod=product&act=store" method="POST" enctype="multipart/form-data" role="form" id="form_add">
				<div class="row"> 
					<div class="col-xs-6">
						<div class="form-group">
							<label for="">Code</label>
							<input type="text" class="form-control" name="code" 
							value="<?php if(isset($_SESSION['value_old'])) echo $_SESSION['value_old']['code'] ?>" required="required" autocomplete="off">
						</div>

						<div class="form-group">
							<label for="">Name</label>
							<input type="text" class="form-control" name="name"
							 value="<?php if(isset($_SESSION['value_old'])) echo $_SESSION['value_old']['name'] ?>" required="required" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="">Quantity</label>
							<input type="text" class="form-control" name="quantity" 
							value="<?php if(isset($_SESSION['value_old'])) echo $_SESSION['value_old']['quantity'] ?>" required="required" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="">Price</label>
							<input type="text" class="form-control" name="price" 
							value="<?php if(isset($_SESSION['value_old'])) echo $_SESSION['value_old']['price'] ?>" required="required" autocomplete="off">
						</div>
						<div class="form-group">
							<label for="">Type</label>
							<select class="form-control" name="type_id" >
								<?php foreach ($type as $value) { ?>
									<option value="<?= $value['id'] ?>"
										
										<?php if(isset($_SESSION['value_old']) && $value['id'] == $_SESSION['value_old']['type_id']){?>
												selected
										<?php } ?>

										><?= $value['name']?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Color</label>
							<select class="form-control" name="color_id" >
								<?php foreach ($color as $value) { ?>
									<option value="<?= $value['id'] ?>"
										
										<?php if(isset($_SESSION['value_old']) && $value['id'] == $_SESSION['value_old']['color_id']){?>
												selected
										<?php } ?>

										><?= $value['name']?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Ram</label>
							<select class="form-control" name="ram_id" >
								<?php foreach ($ram as $value) { ?>
									<option value="<?= $value['id'] ?>"
										
										<?php if(isset($_SESSION['value_old']) && $value['id'] == $_SESSION['value_old']['ram_id']){?>
												selected
										<?php } ?>

										><?= $value['name']?></option>
								<?php } ?>
							</select>
						</div>
						
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							<label for="">Image</label>
							<input type="file" name="image" required="required">
						</div>
						<div class="form-group">
							<label for="">Status</label>
							<select class="form-control" name="status_id" >
								<?php foreach ($status as $value) { ?>
									<option value="<?= $value['id'] ?>"
										
										<?php if(isset($_SESSION['value_old']) && $value['id'] == $_SESSION['value_old']['status_id']){?>
												selected
										<?php } ?>

										><?= $value['name']?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Operating System</label>
							<select class="form-control" name="operating_system_id" >
								<?php foreach ($operating_system as $value) { ?>
									<option value="<?= $value['id'] ?>"
										
										<?php if(isset($_SESSION['value_old']) && $value['id'] == $_SESSION['value_old']['operating_system_id']){?>
												selected
										<?php } ?>

										><?= $value['name']?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Cpu</label>
							<select class="form-control" name="cpu_id" >
								<?php foreach ($cpu as $value) { ?>
									<option value="<?= $value['id'] ?>"
										
										<?php if(isset($_SESSION['value_old']) && $value['id'] == $_SESSION['value_old']['cpu_id']){?>
												selected
										<?php } ?>

										><?= $value['name']?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Brand</label>
							<select class="form-control" name="branch_id" >
								<?php foreach ($branch as $value) { ?>
									<option value="<?= $value['id'] ?>"
										
										<?php if(isset($_SESSION['value_old']) && $value['id'] == $_SESSION['value_old']['branch_id']){?>
												selected
										<?php } ?>

										><?= $value['name']?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Screen Size</label>
							<select class="form-control" name="screen_size_id" >
								<?php foreach ($screen_size as $value) { ?>
									<option value="<?= $value['id'] ?>"
										
										<?php if(isset($_SESSION['value_old']) && $value['id'] == $_SESSION['value_old']['screen_size_id']){?>
												selected
										<?php } ?>

										><?= $value['name']?></option>
								<?php } ?>
							</select>
						</div>
					</div>

				</div>
				<div class="form-group">
					<label for="">Description</label>
					<textarea id="description" name="description" required="required">
						<?php if(isset($_SESSION['value_old'])) echo $_SESSION['value_old']['description'] ?>
					</textarea>

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
<script type="text/javascript">
	CKEDITOR.replace( 'description' );
</script>






 