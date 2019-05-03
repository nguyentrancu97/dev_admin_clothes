<?php include_once("layouts/header.php") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			MANAGER SLIDER
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
		<div class="box-header with-border ">

			<table  class="table table-bordered table-striped mytable" >
				
				<a href="?role=admin&mod=slider&act=add" style="margin-bottom: 20px;" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
			
				<thead>
					<tr>
					
						<th>Title</th>
						<th>Image</th>
						<th>Content</th>
						
						<th>Action</th>
					
					</tr>
				</thead>
				<tbody id="tbody">
					<?php 
					foreach ($data as $row) {?>
						<tr>
							
							
							<td><?= $row['title']?></td>
							<td><img style="width:50px; height:50px;" src="../upload/<?= $row['image'] ?>"></td>
							<td><?= $row['content'] ?></td>
							
							<td>
								<a href="?role=admin&mod=slider&act=edit&id=<?php echo $row['id'] ?>" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								<a href="" data-url="?role=admin&mod=slider&act=delete&id=<?php echo $row['id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>


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