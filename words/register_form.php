<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('head.php'); ?>
</head>

<body>
	<?php include('navbar.php'); ?>
	<div class="container pt-3">
		<div class="p-5 text-center">
			<h3>สมัครเข้าใช้งาน</h3>
		</div>
		<div class="col-md-6 offset-md-3 jumbotron">
			<form action="register.php" method="post">
				<div class="form-group">
					<label for="username">ชื่อผู้ใช้</label>
					<input name="username_reg" type="text" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">รหัสผ่าน</label>
					<input name="password_reg" type="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="email">อีเมล</label>
					<input name="email_reg" type="email" class="form-control">
				</div>
				<div class="text-center">
					<button class="btn btn-danger" type="submit">สมัครสมาชิก</button>
					<button class="btn btn-primary" type="reset">รีเซ็ต</button>
				</div>
			</form>
		</div>
	</div>
</body>

</html>