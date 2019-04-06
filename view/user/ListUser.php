<?php include_once("layouts/header.php") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Quản lí user
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
				<a href="?role=admin&mod=user&act=add" style="margin-bottom: 20px;" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>UserName</th>
						<th>Address</th>
						<th>Date Of Birth</th>
						<th>Branch ID</th>
						
						<th>Role</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody id="tbody">
					<?php 
					foreach ($data as $row) {?>
						<tr>
							<td><?= $row['user_id']?></td>
							<td><?= $row['name']?></td>
							<td><?= $row['username']?></td>		
							<td><?= $row['address']?></td>
							<td><?= $row['dateofbirth'] ?></td>
							<td><?= $row['branch_id']?></td>					
							<td><?php  switch ($row['role']) {
								case '0':
									echo "Admin";
									break;
								case '1':
									echo "...";
									break;
								case '2':
									echo "...";
									break;	
								default:
									# code..
									break;
							} ?></td>
							<td>
								<a href="?role=admin&mod=user&act=edit&user_id=<?php echo $row['user_id'] ?>" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								<a href="?role=admin&mod=user&act=delete&user_id=<?php echo $row['user_id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>


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