<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">



	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="./css/css-main.css" rel="stylesheet" type="text/css">
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
						<a href="login.php" style="font-weight:bold;">
							<i class="glyphicon glyphicon-log-in"></i> เข้าสู่ระบบ
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- <!—End Menu  -->
	<!-- <!—Panel Login จัดใ ้อยู่กึ่งกลางระ  ่าง น้าจอ และใ ้รองรับทุก Device   -->
	<div class="col-md-4 col-md-offset-4 col-sm-12 col-md-sm-offset-4" style="margin-top: 50px;">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title" style="font-weight:bold;">เมนูู</div>
			</div>
			<div class="panel-body">
				<div class="">
					<a href="#" class="btn btn-primary btn-block font-rsu" style="font-weight:bold;" data-toggle="modal" data-target="#myModalLogin">เข้าสู่ระบบ</a>
					<a href="register.html" class=" btn btn-danger btn-block font-rsu" style="font-weight:bold;">สมัครสมาชิก</a>
					<a href="forgetpassword.html" class=" btn btn-success btn-block font-rsu" style="font-weight:bold;">ลืมรหัสผ่าน</a>
				</div>
			</div>
		</div>
	</div>
	<!-- <!—End Panel Login -->
	<div class="panel-group" style="position: fixed; bottom: 0px; right: 0; left: 0; margin-bottom: 0;">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" href="#collapse1">จัดทำโดย</a>
				</h4>
			</div>
			<div id="collapse1" class="panel-collapse collapse">
				<div class="panel-body">
					<div class="alert alert-success" style="padding: 30px;">
						<p>ชื่อ-สกุล : นายสุเมธ ผงพิลา</p>
						<p>รหัสนึกศึกษา : 60522210345-7</p>
						<p>ห้อง : Isr4B</p>
						<p></p>
						<small>Power by Html Css Javascript MySQL Bootstrap</small>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>

<?php include('modal_login.php') ?>