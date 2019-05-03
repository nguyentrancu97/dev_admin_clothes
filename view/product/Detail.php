<?php include_once('layouts/header.php') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			DETAIL PRODUCT
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
			<div class="row">
				<div class="col-xs-6">
					<table class="table table-hover ">
						<tbody>
							<tr>
								<td style="width: 30%;"><b>Code</b></td>
								<td style="width: 70%"><?php echo $data_product['code']; ?></td>
							</tr>
							<tr>
								<td style="width: 30%;"><b>Status</b></td>
								<td style="width: 70%"><?php echo $data_product['status']; ?></td>
							</tr>
							<tr>
								<td style="width: 30%;"><b>Created By</b></td>
								<td style="width: 70%"><?php echo $data_product['user']; ?></td>
							</tr>
							<tr>
								<td style="width: 30%;"><b>Name</b></td>
								<td style="width: 70%"><?php echo $data_product['name']; ?></td>
							</tr>
							<tr>
								<td style="width: 30%;"><b>Quantity</b></td>
								<td style="width: 70%"><?php echo $data_product['quantity']; ?></td>
							</tr>
							<tr>
								<td style="width: 30%;"><b>Price</b></td>
								<td style="width: 70%"><?php echo number_format($data_product['price']) ; ?>đ</td>
							</tr>
							<tr>
								<td style="width: 30%;"><b>Type</b></td>
								<td style="width: 70%"><?php echo $data_product['type']; ?></td>
							</tr>
							<tr>
								<td style="width: 30%;"><b>Brand</b></td>
								<td style="width: 70%"><?php echo $data_product['branch']; ?></td>
							</tr>
							<tr>
								<td style="width: 30%;"><b>Color</b></td>
								<td style="width: 70%"><?php echo $data_product['color']; ?></td>
							</tr>
							<tr>
								<td style="width: 30%;"><b>Ram</b></td>
								<td style="width: 70%"><?php echo $data_product['ram']; ?></td>
							</tr>
							<tr>
								<td style="width: 30%;"><b>Operating System</b></td>
								<td style="width: 70%"><?php echo $data_product['operating_system']; ?></td>
							</tr>
							<tr>
								<td style="width: 30%;"><b>Cpu</b></td>
								<td style="width: 70%"><?php echo $data_product['cpu']; ?></td>
							</tr>
							<tr>
								<td style="width: 30%;"><b>Screen Size</b></td>
								<td style="width: 70%"><?php echo $data_product['screen_size']; ?></td>
							</tr>
							
							
							<tr>
								<td style="width: 30%;"><b>Description</b></td>
								<td style="width: 70%"><?php echo $data_product['description']; ?></td>
							</tr>

						</tbody>
					</table>
				</div>
				<div class="col-xs-6">
					<table class="table table-hover ">
							
						<tbody>
							
							<tr>	
								<td ><img style="width:500px; height: 500px;" src="../upload/<?php echo $data_product['image'] ?>"></td>
							</tr>
						</tbody>
					</table>

				</div>
			</div>
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