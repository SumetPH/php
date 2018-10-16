<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('head.php'); ?>
	<style>
		body {
			background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),
				url('images/bg.jpg');
			background-size: cover;
		}
	</style>
</head>

<body>
	<?php include('navbar.php'); ?>
	<div class="container" style="margin-top: 2rem;">
		<div class="jumbotron text-center">
			<div>
				<h2>คลังคำศัพท์</h2>
				<p>(เว็บไซต์สำหรับการจดคำศัพท์)</p>
				<h4>จัดทำโดย</h4>
				<img id="img" class="img-thumbnail animated pulse" src="images/sumetph.jpg" style="width: 200px; height: 200px; border-radius: 50%;"
				 alt="">
				<p></p>
				<h5>นายสุเมธ ผงพิลา <br> 60522210345-7 ISR4B</h5>
				<p></p>
				<p>รายวิชา การเขียนโปรแกรมเว็บแบบพลวัติ <br> อาจารย์ มานิตย์ สานอก</p>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-3">
					<a href="login_form.php" class="btn btn-info btn-block">เข้าสู่ระบบ</a>
				</div>
				<div class="col-md-3">
					<a href="register_form.php" class="btn btn-primary btn-block">ลงทะเบียน</a>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>

	<script>
		$(document).ready(function () {
			$('#img').mouseover(function () {
				$(this).addClass('animated pulse infinite')
			})
			$('#img').mouseout(function () {
				$(this).removeClass('animated pulse infinite')
			})
			$('.btn').mouseover(function () {
				$('#img').addClass('animated pulse infinite')

			})
			$('.btn').mouseout(function () {
				$('#img').removeClass('animated pulse infinite')
			})
		})
	</script>
</body>

</html>