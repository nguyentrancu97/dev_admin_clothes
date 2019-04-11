<?php include_once("layouts/header.php") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Sale
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

			<h3>DANH SÁCH SẢN PHẨM</h3>
			<table class="table table-bordered table-striped mytable" >

				<thead>
					<tr>

						<th>Product Code</th>
						<th>Name</th>
						<th>Producer Name</th>
						<th>Category Name</th>

						<th>Price</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($data as $row) {?>
						<tr>

							<td><?= $row['product_code']?></td>
							<td><?= $row['product_name']?></td>
							<td><?= $row['producer_name']?></td> 
							<td><?= $row['category_name']?></td>

							<td><?= $row['price']?> đ</td>
							<td>
								<a href="?role=employee&mod=sale&act=buy&product_id=<?php echo $row['product_id'] ?>" class="btn btn-info"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>



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
