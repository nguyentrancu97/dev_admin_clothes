<?php include_once('layouts/header.php') ?>
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
		<div class="box-header with-border">
			<div class="row">
				<div class="col-xs-6">
					<table class="table table-hover ">
						<tbody>
							<tr>
								<td style="width: 30%;">Ảnh</td>
								<td style="width: 70%"><img src="public/images/uploads/<?php echo $data_product['img'] ?>" alt=""></td>
							</tr>
							<tr>
								<td style="width: 30%;">Product Name</td>
								<td style="width: 70%"><?php echo $data_product['name']; ?></td>
							</tr>
							<tr>
								<td style="width: 30%;">Total Quantity</td>
								<td style="width: 70%"><?php echo $total_quantity; ?></td>
							</tr>
							<tr>
								<td style="width: 30%;">Price</td>
								<td style="width: 70%"><?php echo $data_product['price']; ?></td>
							</tr>
							<tr>
								<td style="width: 30%;">Description</td>
								<td style="width: 70%"><?php echo $data_product['description']; ?></td>
							</tr>

						</tbody>
					</table>
				</div>
				<div class="col-xs-6">
					<table class="table table-hover ">
						<thead>
							<tr>
								<th>Color</th>
								<th>Size</th>
								<th>Quantity</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data_size_color as $key => $value): ?>
								<tr>
									<td><?php echo $value['color_name'] ?></td>
									<td><?php echo $value['size_name'] ?></td>
									<td><?php echo $value['quantity'] ?></td>
								</tr>
							<?php endforeach ?>
							
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