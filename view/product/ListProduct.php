<?php include_once("layouts/header.php") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Quản lí sản phẩm
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

			<table id="mytable" class="table table-hover " >
				<a href="?role=admin&mod=product&act=add" style="margin-bottom: 20px;" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
				<thead>
					<tr>
						<th>#</th>
						<th>Product Code</th>
						<th>Name</th>
						<th>Producer Name</th>
						<th>Category Name</th>
						<th>Description</th>
						<th>Price</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="tbody">
					<?php 
					foreach ($data as $row) {?>
						<tr>
							<td><?= $row['product_id']?></td>
							<td><?= $row['product_code']?></td>
							<td><?= $row['product_name']?></td>
							<td><?= $row['producer_name']?></td>
							<td><?= $row['category_name']?></td>
							<td><?= $row['description']?></td>
							<td><?= $row['price']?> đ</td>
							<td>
								<a href="?role=admin&mod=product&act=detail&id=<?php echo $row['product_id'] ?>" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
								<a href="?role=admin&mod=product&act=edit&id=<?php echo $row['product_id'] ?>" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								<a href="?role=admin&mod=product&act=delete&id=<?php echo $row['product_id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>


							</td>

						</tr> 
						<?php   
					}

					?>

				</tbody>
			</table>
		</div>

	</div>
	<!-- /.box -->
	<!-- modal -->
	<!-- Button trigger modal -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include_once("layouts/footer.php") ?>
<?php if(isset($_COOKIE['true'])){ ?>
	<script type="text/javascript">
		$(document).ready(function(){
			toastr.success('Thêm Thành Công!!');
			
		})
	</script>
<?php } ?>