<?php include_once("layouts/header.php") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Manager order
			<!--  <div class="#kq"></div> -->
		</h1>
	   
</section>

<!-- Main content -->
<section class="content">
	<!-- Default box -->
	<div class="box">
		<div class="box-header with-border " >
			<div class="row">
				<div class="col-md-6">
					<form style="margin-bottom: 75px;" action="?role=admin&mod=order&act=filter" method="POST" role="form">
						<label for="status">Trạng Thái</label>
						<select style="border-radius: 3px; padding: 5px; outline: none;" name="status">
							<option class="form-group" value="0">Tất cả</option>
							<option class="form-group" value="1" <?php if(isset($status) && $status==1){ ?>selected<?php } ?>>Đang chờ duyệt</option>
							<option class="form-group" value="2" <?php if(isset($status) && $status==2){ ?>selected<?php } ?>>Đang chờ vận chuyển</option>
							<option class="form-group" value="3" <?php if(isset($status) && $status==3){ ?>selected<?php } ?>>Đang vận chuyển</option>
							<option class="form-group" value="4" <?php if(isset($status) && $status==4){ ?>selected<?php } ?>>Đã hoàn thành</option>
						</select>
						<button type="submit" style="padding: 5px 10px; border-radius: 3px; border: none;">Lọc</button>
					</form>
				</div>
				<div class="col-md-6">
					<form style="margin-bottom: 75px;" action="?role=admin&mod=order&act=filter_date" method="POST" role="form">
						
						<div style="padding: 5px 0;">
							<label style="width: 80px;" for="date">Từ ngày</label>
							<input type="date" value="<?=$from?>" name="from" id="date" autofocus="hidden" required="" style="border-radius: 3px; padding: 3px; border: 1px solid #999; outline: none;" >

						</div>
						<div style="padding: 5px 0;">
							<label style="width: 80px;" for="date2">Đến ngày</label>
							<input type="date" value="<?=$to?>" name="to" id="date2" autofocus="hidden" required=""  style="border-radius: 3px; padding: 3px; border: 1px solid #999; outline: none;">

						</div>
						<button type="submit" style="padding: 5px 10px; border-radius: 3px; border: none;">Search</button>
					</form>
				</div>
			</div>
			

			
			
		
			
			<table  class="table table-bordered table-striped mytable" >
				<!-- <a href="?role=admin&mod=order&act=add" style="margin-bottom: 20px;" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i></a> -->
				<thead>
					<tr>
						<th>Code</th>
						<th>Status</th>
						<th>Created_by</th>
						<th>Created_date</th>	
						<th>Action</th>
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
							<td><?= $row['user_name']?></td>
							<td><?= $row['created_date']?></td>
							
							
							<td>
								<a href="?role=admin&mod=order&act=detail&order_id=<?php echo $row['id'] ?>" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
								<!-- <a href="?role=admin&mod=order&act=edit&order_id= " class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> -->
								<?php if($row['status'] < 4 && $row['status'] >= 1){ ?>
									<a class="btn btn-success" href="?role=admin&mod=order&act=process&order_id=<?php echo 
									$row['id'] ?>&status=<?=$row['status'] ?>">Xử lí</a>
								<?php } ?>

								
									<a href="?role=admin&mod=order&act=delete&order_id=<?php echo $row['id'] ?>&status=<?=$row['status'] ?>" class="btn btn-danger"></i>Hủy</a>
								
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
			toastr.success('Process success!!');	
		})
	</script>
<?php } ?>

