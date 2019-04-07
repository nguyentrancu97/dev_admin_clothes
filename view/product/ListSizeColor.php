<?php include_once("layouts/header.php") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Size và color sản phẩm có product_id = <?php echo $product_id; ?>
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
				<a href="?role=admin&mod=product&act=add_size_color&product_id=<?php echo $product_id ?>" style="margin-bottom: 20px;" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
				<thead>
					<tr>
						<th>#</th>
						<th>Product_name</th>
						<th>Size_name</th>
						<th>Color_name</th>
						<th>Quantity</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="tbody">
					<?php 
					foreach ($data as $row) {?>
						<tr>
							<td><?= $row['id']?></td>
							<td><?= $row['product_name']?></td>
							<td><?= $row['size_name']?></td>
							<td><?= $row['color_name']?></td>
							<td><?= $row['quantity']?></td>
							<td>
								
								<a href="?role=admin&mod=product&act=edit_size_color&id=<?php echo $row['id'] ?>" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								<a href="?role=admin&mod=product&act=delete_size_color&id=<?php echo $row['id'] ?>&product_id=<?php echo $product_id ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>


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