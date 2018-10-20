<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('head.php'); ?>
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
					<button class="btn btn-info" type="reset">รีเซ็ต</button>
				</div>
			</form>
		</div>
	</div>
</body>

</html>