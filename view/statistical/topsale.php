<?php include_once('layouts/header.php') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			TOP BEST SELLER
			<!--  <div class="#kq"></div> -->
		</h1>
    <!-- <ol class="breadcrumb">
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

				<thead>
					<tr>
						<th>Code</th>
						<th>Name</th>
						<th>Quantity</th>
						<th>Revenue</th>
						
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="tbody">
					<?php 
					foreach ($data as $row) {?>
						<tr>
							<td><?= $row['code']?></td>
							<td><?= $row['name']?></td>
							<td><?= $row['total_quantity']?></td>
							<td><?= $row['sub_total']?></td>
							
							
							<td>
								<a href="?role=admin&mod=product&act=detail&id=<?php echo $row['id'] ?>" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
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
<?php include_once('layouts/footer.php') ?>