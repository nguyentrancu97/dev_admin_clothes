<?php include_once("layouts/header.php") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Danh sách khách hàng
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

			<table class="table table-bordered table-striped mytable" >
				<a href="?role=employee&mod=sale&act=list_product" style="margin-bottom: 20px;" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
				<thead>
					<tr>
						<th>Customer ID</th>
						<th>Name</th>
						<th>Username</th>
						<th>Address</th>
						<th>Date Of Birth</th>
						
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($data as $row) {?>
						<tr>
							<td><?= $row['customer_id']?></td>
							<td><?= $row['name']?></td>
							<td><?= $row['username']?></td>
							<td><?= $row['address']?></td>
							<td><?= $row['dateofbirth'] ?></td>
							
						
							<td>
								<a href="?role=employee&mod=sale&act=list_product&customer_id=<?php echo $row['customer_id'] ?>" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
								


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
<?php if(isset($_COOKIE['check_out_success'])){ ?>
	<script type="text/javascript">
		$(document).ready(function(){
			toastr.success('Thanh toán Thành Công!!');
			
		})
	</script>
<?php } ?>

