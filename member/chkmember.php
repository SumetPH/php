<?php ob_start();?>
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
					<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand font-20" href="index.html">My Website</a> </div>
			<div class="collapse navbar-collapse" id="navbar-ex-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="index.html" style="font-weight:bold;">
							<i class="glyphicon glyphicon-home"></i> หน้าหลัก
						</a> </li>
					<li>
						<a href="login.php" style="font-weight:bold;">
							<i class="glyphicon glyphicon-log-in"></i> เข้าสููู่ระบบ </a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- <!—End Menu  -->
	<div class="col-md-5 col-md-offset-4 col-sm-12 col-md-sm-offset-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title" style="font-weight:bold;">คำเตือน</div>
			</div>
			<div class="panel-body">
				<?php 
					$user_login = $_POST[user_login]; 
					$pass_login = $_POST[pass_login];
					if ($user_login=="" or $pass_login=="") {
						echo "<div class='alert alert-info'>ERROR : กรุณากรอกข้อมูลให้ครบด้วยนะครับ<div>"; 
						exit();
					}

					include "connect.php";
					$sql="select * from tb_member where username='$user_login' and password='$pass_login'";
					$result=mysql_db_query($dbname,$sql); $num=mysql_num_rows($result); mysql_close();
					if($num <= 0) {
						echo "<div class='alert alert-info' style='color:red; font-weight:bold;'>ERROR : Username หรือ Password ไม่ถูกต้อง</div>
						<p></p>
						<a href='login.php' class='btn btn-danger btn-block'>
						<i class='glyphicon glyphicon-arrow-left'></i> กลับหน้า Login</a> ";
					} else { 
						session_start();
						$_SESSION[sess_userid]=session_id();
						$_SESSION[sess_username]=$user_login; 
						header("Location: main.php");
						// echo "Success";
					}
				?>
			</div>
		</div>
	</div>
</body>

</html>