<?php include_once("layouts/header.php") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			MANAGER PRODUCT
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
		<div class="box-header with-border ">

			<table class="table table-bordered table-striped mytable" >
				
				<a href="?role=admin&mod=product&act=add" style="margin-bottom: 20px;" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
				
				<thead>
					<tr>
						<th>Code</th>
						<th>Name</th>
						<th>Quantity</th>
						<th>Image</th>
						<th>Status</th>
						<th>Price</th>
						<th>Created Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="tbody">
					<?php 
					foreach ($data as $row) {?>
						<tr>
							<td><?= $row['code']?></td>
							<td style="width: 350px;"><?= $row['name']?></td>
							<td><?= $row['quantity']?></td>
							<td><img style="width:50px; height:50px;" src="../upload/<?= $row['image']?>"></td>
							<td><?= $row['status']?></td>
							
							<td><?= number_format($row['price']) ?>đ</td>
							<td><?= $row['created_date']?></td>
							
							<td>
								<a href="?role=admin&mod=product&act=detail&id=<?php echo $row['id'] ?>" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
								<a href="?role=admin&mod=product&act=edit&id=<?php echo $row['id'] ?>" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								
								<a href="" data-url="?role=admin&mod=product&act=delete&id=<?php echo $row['id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
								

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


