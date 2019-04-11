<?php include_once("layouts/header.php") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Cart
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
			<div>
				
				<?php if(isset($_SESSION['customer'])){ ?>
				<h3>THÔNG TIN KHÁCH HÀNG</h3>
				<ul style="list-style: none;">
					<li>Code: <?= $_SESSION['customer']['customer_id'] ?></li>
					<li>Name: <?=$_SESSION['customer']['name'] ?></li>
					<li>Address: <?= $_SESSION['customer']['address'] ?> </li>
					<li>Date Of birth: <?= $_SESSION['customer']['dateofbirth'] ?> </li>

				</ul>
				<?php }else{ ?>
					<p>Không có thông tin khách hàng</p>
				<?php } ?>

			</div>

			<h3>DANH SÁCH SẢN PHẨM TRONG GIỎ</h3>
			<table class="table table-bordered table-striped mytable" >

				<thead>
					<tr>

						<th>Product Code</th>
						<th>Product Name</th>
						<th>Size</th>
						<th>Color</th>
						<th>Quantity Buy</th>
						<th>Price Buy</th>
						<th>Sub total</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					if(isset($_SESSION['cart'])){
						$tong = 0;
					foreach ($_SESSION['cart'] as $row) {
						$tong += $row['quantity_buy'] * $row['price'];
						?>
						<tr>

							<td><?= $row['product_code']?></td>
							<td><?= $row['product_name']?></td>
							<td><?= $row['size_name']?></td> 
							<td><?= $row['color_name']?></td>
							<td><?= $row['quantity_buy']?></td>
							<td><?= number_format($row['price'])?> đ</td>
							<td><?= number_format($row['quantity_buy'] * $row['price'])  ?>đ</td>
							<td>
								<a href="?role=employee&mod=sale&act=add2cart&product_id=<?php echo $row['product_id'] ?>" class="btn btn-primary">+</a>
								<a href="?role=employee&mod=sale&act=reduce&product_id=<?php echo $row['product_id'] ?>" class="btn btn-danger">-</a>



							</td>

						</tr> 

						<?php } ?>  
					
						<?php } ?>
					
						
				</tbody>
					<tr><td>Tổng: <?php if(isset($tong)) echo number_format($tong) ?>đ</td></tr>
			</table>
		<a href="?role=employee&mod=sale&act=check_out" class="btn btn-info">Check Out</a>
		<a href="?role=employee&mod=sale&act=delete_cart" class="btn btn-danger">Hủy</a>
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


