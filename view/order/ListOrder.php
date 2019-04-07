<?php include_once("layouts/header.php") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Quản lí order
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
				<!-- <a href="?role=admin&mod=order&act=add" style="margin-bottom: 20px;" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a> -->
				<thead>
					<tr>
						<th>Order_id</th>
						<th>Customer Name</th>
						<th>Address Receive</th>
						<th>Phone Receive</th>
						<th>Status</th>
						<th>Created At</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="tbody">
					<?php 
					foreach ($data as $row) {?>
						<tr>
							<td><?= $row['order_id']?></td>
							<td><?= $row['customer_name']?></td>
							<td><?= $row['address_receive']?></td>
							<td><?= $row['phone_receive']?></td>
							<td><?php
							if($row['status'] == 1){
								echo "<i class='fa fa-check'></i>";
							}else{
								echo "<i class='fa fa-circle'></i>";
							}
							

							?></td>
							<td><?= $row['created_at']?></td>
							<td>
								<a href="?role=admin&mod=order&act=detail&order_id=<?php echo $row['order_id'] ?>" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
								<!-- <a href="?role=admin&mod=order&act=edit&order_id= " class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> -->
								<a href="?role=admin&mod=order&act=delete&order_id=<?php echo $row['order_id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
<?php if(isset($_COOKIE['process_success'])){ ?>
	<script type="text/javascript">
		$(document).ready(function(){
			toastr.success('Xử Lí Thành Công!!');	
		})
	</script>
<?php } ?>