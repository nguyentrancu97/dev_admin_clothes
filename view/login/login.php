<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="public/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<script src="public/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
a{
	color: black;
}
body{
	background: url('public/images/uploads/background.jpg');
	background-repeat: no-repeat;
	background-size: cover;
	
}
</style>
<body>
		<div class="container" style="margin-top: 100px;">
			
			<form action="?role&mod&act=check_login" method="POST" role="form" style="width: 30%; margin: auto;">
				<legend>Login</legend>
				<?php if(isset($_COOKIE['false'])){?>
				<h3 style="color: red">Đăng Nhập Thất Bại</h3>
				<?php } ?>
				<?php if(isset($_COOKIE['passed'])){ ?>
				<h3 style="color: green">Lấy Mật Khẩu Thành Công</h3>
				<?php } ?>
				<?php if(isset($_COOKIE['passfalse'])){ ?>
				<h3 style="color: red">Lấy Mật Khẩu Thất Bại</h3>
				<?php } ?>
				<div class="form-group">
					<label for="">Username</label>
					<input type="username" class="form-control" name="username" required="required" >
				</div>
				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" name="password" required="required" >
				</div>
				<p><a href="">Quên mật khẩu</a></p>
			
				<button type="submit" class="btn btn-primary">Login</button>
			</form>
		</div>
		
</body>

</html>