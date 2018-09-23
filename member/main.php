<?
	Include "chksession.php";
	include "function.php";
	include "connect.php";
	$sql="select * from tb_member where username='$sess_username' "; 
	$result=mysql_db_query($dbname,$sql); 
	$record=mysql_fetch_array($result);
	$username=$record[username];
	$name=$record[name];
	$sex=$record[sex];
	$email=$record[email];
	$telephone=$record[telephone];
	$address=$record[address];
	$reg_date=$record[reg_date];
	mysql_close();
?>
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
	 
	<!-- <script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="./css/css-main.css" rel="stylesheet" type="text/css"> -->
	<title>เข้าสู่ระบบ</title>
</head>

<body class="color-white">
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
						<a href="#" style="font-weight:bold;" data-toggle="modal" data-target="#myModal">
							<i class="glyphicon glyphicon-log-out"></i> ออกจากระบบ</a> </a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- <!—End Menu  -->
	<div class="col-md-6 col-md-offset-3" style="padding-top:10px;">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title" style="font-weight:bold;">เข้าสู่ระบบ</div>
			</div>
			<div class="panel-body">
				<? Include "chksession.php"; ?>
				<div class="alert alert-info font-rsu" style="font-size:25px; font-weight:bold; text-align: center;">:: Logined In
					System ::</div>
				<div class="label label-danger " style="font-size:20px; border-radius:0px;">ยินดีต้อนรับ </div>
				<div class="label label-default" style="font-size:20px; border-radius:0px;">
					<?=$sess_username?>
				</div>
				<div class="pull-right">
					<div class="label label-warning" style="font-size:20px; border-radius:0px;">
						ท่านกาลังอยู่ในระบบสมาชิก </div>
				</div>
				<p></p></br>
				<a href="view.php" class="btn btn-success btn-block">
					รายชื่อสมาชิกทั้งหมด</a>
				<a href="edit.php" class="btn btn-primary btn-block">แก้ไขข้อมูลส่วนตัว</a>
				<a href="changepw.php" class="btn btn-info btn-block">เปลี่ยนรหัสผ่าน</a>
			</div>
		</div>
	</div>
</body>

</html>

<?php include "modal.php";?>