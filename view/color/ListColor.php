<?php include_once("layouts/header.php") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Quản lí color
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
		<div class="box-header with-border " >

			<table  class="table table-bordered table-striped mytable" >
				<?php if(isset($_SESSION['isLogin']) && $_SESSION['isLogin']['role'] == 0){ ?>
				<a href="?role=admin&mod=color&act=add" style="margin-bottom: 20px;" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
			<?php } ?>
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<?php if(isset($_SESSION['isLogin']) && $_SESSION['isLogin']['role'] == 0){ ?>
						<th>Action</th>
						<?php } ?>
					</tr>
				</thead>
				<tbody id="tbody">
					<?php 
					foreach ($data as $row) {?>
						<tr>
							<td><?= $row['id']?></td>
							<td><?= $row['name']?></td>
							<?php if(isset($_SESSION['isLogin']) && $_SESSION['isLogin']['role'] == 0){ ?>
							<td>
								
								<a href="?role=admin&mod=color&act=edit&id=<?php echo $row['id'] ?>" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								<a href="?role=admin&mod=color&act=delete&id=<?php echo $row['id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
								

							</td>
						<?php } ?>

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