<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>
	<link rel="stylesheet" href="css/superhero.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<?php include('navbar.php'); ?>
	<div class="container pt-3">
		<div class="p-5 text-center">
			<h3>เข้าสู่ระบบ</h3>
		</div>
		<div class="col-md-6 offset-md-3 jumbotron">
			<form action="login.php" method="post">
				<div class="form-group">
					<label for="username">ชื่อผู้ใช้</label>
					<input name="username_login" type="text" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">รหัสผ่าน</label>
					<input name="password_login" type="password" class="form-control" required>
				</div>
				<div class="text-center">
					<button class="btn btn-success" type="submit">เข้าสู่ระบบ</button>
					<button class="btn btn-primary" type="reset">รีเซ็ต</button>
				</div>
			</form>
		</div>
	</div>
</body>

</html>