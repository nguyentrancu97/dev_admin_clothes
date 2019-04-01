<?php include_once("layouts/header.php") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Quản lí nhân viên
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
						<th>Product_id</th>
						<th>Name</th>
						<th>IMG</th>
						<th>Producer_name</th>
						<th>Category_name</th>
						<th>Description</th>
						<th>Price</th>
						<th>#</th>
					</tr>
				</thead>
				<tbody id="tbody">
					<?php 
					foreach ($data as $row) {?>
						<tr>
							<td><?= $row['product_id']?></td>
							<td><?= $row['product_name']?></td>
							<td><?= $row['img']?></td>
							<td><?= $row['producer_name']?></td>
							<td><?= $row['category_name']?></td>
							<td><?= $row['description']?></td>
							<td><?= $row['price']?></td>
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