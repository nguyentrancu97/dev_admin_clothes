<?php include_once('layouts/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Thêm Size
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
			<form action="?role=admin&mod=size&act=store" method="POST" enctype="multipart/form-data" role="form">
				<div class="form-group">
					<label for="">Size Name</label>
					<input type="text" class="form-control" name="name" 
					value="<?php if(isset($_SESSION['data'])){
						echo($_SESSION['data']['name']);
					} ?>" required="required">
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
<?php if(isset($_COOKIE['false'])){ ?>
	<script type="text/javascript">
		$(document).ready(function(){
			toastr.error('Thêm Thất bại!! Trùng Tên');
			$("input[name='name']").css("border-color","red");
		})
	</script>
<?php } ?>	

 