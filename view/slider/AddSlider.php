<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			THÊM SLIDER
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
		<div class="box-header with-border">
			<form action="?role=admin&mod=slider&act=store" method="POST" enctype="multipart/form-data" role="form">
				<div class="form-group">
					<label for="">Code</label>
					<input type="text" class="form-control" name="code" required="required" autocomplete="off" <?php if(isset($_SESSION['value_old'])){ ?> value="<?= $_SESSION['value_old']['code'] ?>" <?php } ?>>
				</div>
				<div class="form-group">
					<label for="">Title</label>
					<input type="text" class="form-control" name="title" required="required" autocomplete="off" <?php if(isset($_SESSION['value_old'])){ ?> value="<?= $_SESSION['value_old']['title'] ?>" <?php } ?>>
				</div>
				<div class="form-group">
					<label for="">Image</label>
					<input type="file" name="image" required="required">
				</div>
				<div class="form-group">
					<label for="">Content</label>
					<textarea id="content" name="content"> 
						<?php if(isset($_SESSION['value_old'])){
							echo $_SESSION['value_old']['content'];
						} ?>
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
	CKEDITOR.replace( 'content' );
</script>


 