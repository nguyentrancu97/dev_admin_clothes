<?php include_once('layouts/header.php') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			LIST ORDER BY STAFF  
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
			<h4>STAFF INFO</h4>
			<table class="table table-striped table-bordered">

				<tbody>
					<tr>
						<td><b>Code</b></td>
						<td><?php echo $user['code'] ?></td>
					</tr>
					<tr>
						<td><b>Name</b></td>
						<td><?php echo $user['name'] ?></td>

					</tr>
					<tr>
						<td><b>Email</b></td>
						<td><?php echo $user['email'] ?></td>

					</tr>
					<tr>
						<td><b>Phone</b></td>
						<td><?php echo $user['phone'] ?></td>

					</tr>
					

				</tbody>
			</table>
			<h4>LIST ORDER</h4>
			<table  class="table table-bordered table-striped mytable" >
				<!-- <a href="?role=admin&mod=order&act=add" style="margin-bottom: 20px;" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a> -->
				<thead>
					<tr>
						<th>Code</th>
						<th>Status</th>
						
						<th>Created_date</th>	
						
					</tr>
				</thead>
				<tbody id="tbody">
					<?php 
					foreach ($data as $row) {?>
						<tr>
							<td><?= $row['code']?></td>
							<td><?php if($row['status'] == 1){
								echo "Đang chờ duyệt";
							}elseif($row['status']==2){
								echo "Đang chờ vận chuyển";
							}elseif($row['status']==3){
								echo "Đang vận chuyển";
							}elseif($row['status']==4){
								echo "Đã hoàn thành";
							} ?></td>
							
							<td><?= $row['created_date']?></td>
							
							
							

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