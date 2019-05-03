<?php include_once('layouts/header.php') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			TOP BEST SELL PRODUCT 
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
						
						
					</tr>
				</thead>
				<tbody id="tbody">
					<?php 
					foreach ($data as $row) {?>
						<tr>
							<td><?= $row['code']?></td>
							<td><?= $row['name']?></td>
							<td><?= $row['total_quantity']?></td>
							<td><?= number_format($row['sub_total'])?>đ</td>
							
							
							

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