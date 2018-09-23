<? Include "chksession.php"; ?>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	 crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
	 crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	 crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
	 crossorigin="anonymous"></script>

	<!-- <script type="text/javascript" src="./js/jquery.min.js"> </script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="./css/css-main.css" rel="stylesheet" type="text/css"> -->
	<title>เข้าสู่ระบบ</title>
</head>

<body>
	<!-- <!—Menu  -->
		<div class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
				<span class="sr-only">Toggle navigation</span> 
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand font-20" href="index.html">My Website</a> 
		</div>
		<div class="collapse navbar-collapse" id="navbar-ex-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="index.html" style="font-weight:bold;">
						<i class="glyphicon glyphicon-home"></i> หน้าหลัก
					</a> </li>
				<li>
					<a href="login.php" style="font-weight:bold;">
						<i class="glyphicon glyphicon-log-in"></i> เข้าสู่ระบบ
					</a> 
				</li>
			</ul>
		</div>
	</div>
	</div>
	<!-- <!—End Menu  -->
		<div class="col-md-6 col-md-offset-3 col-sm-12 col-md-sm-offset-4">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="panel-title" style="font-weight:bold;">เปลี่ยนรหัสผ่าน</div>
		</div>
		<div class="panel-body">
			<?php
				$oldpass=$_POST[oldpass]; 
				$newpass=$_POST[newpass]; 
				$newpass2=$_POST[newpass2];
				if ($oldpass=="" or $newpass=="" or $newpass2=="" or $newpass<>$newpass2) {
					echo "<h3>ERROR : กรุณากรอกข้อมูลใหัครบนะครับ<h3>";
				} else {
					include "connect.php";
					$sql="select * from tb_member where username='$sess_username' and password='$oldpass' "; 
					$result=mysql_db_query($dbname,$sql);
					$num=mysql_num_rows($result); 
					if($num < 1) {
						echo "<h3>รหัสผ่านเดิมไม่ถูกต้องครับ </h3>"; exit();
						exit();
					}

					$sql="update tb_member set password='$newpass' where username='$sess_username'";
					$result=mysql_db_query($dbname,$sql); 
					if ($result) {
						echo "<div class='alert alert-info' style='font-size:17px; font- weight:bold;'>เปล่ยนรหัสผ่านเรียบร้อยแล้วครับ</div>";
						echo "<a href='main.php' class='btn btn-primary btn-block'><i class='glyphicon glyphicon-arrow-left'></i> กลับหน้าหลัก</a>"; 
					} else {
						echo "<h3>ไม่สามารถเปลี่ยนรหัสผ่านได้</h3>";
					}
				}
				mysql_close();
			?>
		</div>
	</div>
	</div>
</body>

</html>