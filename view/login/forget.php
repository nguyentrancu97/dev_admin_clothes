<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forget</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
		<div class="container" style="margin-top: 100px;">
			
			<form action="index.php?mod=login&act=sendmail" id="form-forget" method="POST" role="form" style="width: 30%; margin: auto;">
				<legend>Quên mật khẩu</legend>
				
				<div class="form-group">
					<label for="">Email</label>
					<input type="email" class="form-control" name="email" placeholder="Email đăng nhập của bạn" required="required" >
				</div>

				<button type="submit" class="btn btn-primary">Nhận Pass</button>
			</form>
		</div>

</body>
</html>