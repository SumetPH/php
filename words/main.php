<?php include('check_session.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('head.php'); ?>
</head>
<body>
	<?php 
		include('navbar.php'); 
		session_start();
	?>
	<div class="container pt-3">
		<div class="col-md-8 offset-md-2 jumbotron">
			<div class="text-center">
				<h3>ยินดีต้อนรับ <? echo $_SESSION[sess_username] ?></h3>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<a class="btn btn-success btn-block" href="word_show.php">คำศัพท์ทั้งหมด</a>
				</div>
				<div class="col-md-6">
					<a class="btn btn-info btn-block" href="word_add_form.php">เพิ่มคำศัพท์</a>
				</div>
			</div>
			<hr>
			<a class="btn btn-danger btn-block" href="logout.php">ออกจากระบบ</a>
		</div>
	</div>
</body>
</html>