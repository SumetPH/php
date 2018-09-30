<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="./css/css-main.css" rel="stylesheet" type="text/css">
	<title>สมัครมาชิก</title>
</head>

<body>
	<!-- <!—Menu  -->
	<div class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar- ex-collapse">
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
							<i class="glyphicon glyphicon-log-in"></i> เข้าสู่ระบบ </a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- <!—End Menu  -->

	<div class="container">
		<div style="padding:10px;">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title">สมัครมาชิก
						<div class="pull-right" style="margin-top:-5px;">
							<a href="register.html" class="btn btn-warning">
								<i class="glyphicon glyphicon-arrow-left"></i> กลับหน้าสมัครสมาชิก</a>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<?
						$user_reg = $_POST[user_reg]; 
						$pass_reg = $_POST[pass_reg]; 
						$name_reg = $_POST[name_reg]; 
						$sex_reg = $_POST[sex_reg]; 
						$email_reg = $_POST[email_reg]; 
						$tel_reg = $_POST[tel_reg];
						$address_reg = $_POST[address_reg]; 
						$date_reg = date("Y-m-d");
						
						if ($user_reg=="" or $pass_reg=="" or $name_reg=="" ) {
							echo "<div class='alert alert-danger' style='font-color:red; font-weight:bold;'>ERROR : กรุณากรอกข้อมูลให้ครบด้วยนะครับ</div>"; 
							exit(); 
						}
	
						include "function.php";
						if (!checkemail($email_reg)) {
							echo "<div class='alert alert-danger' style='font-color:red; font-weight:bold;'>ERROR : รูปแบบอีเมลที่กรอกไม่ถูกต้อง</div>"; 
							exit();
						}
	
						include "connect.php";
						$sql="select * from tb_member where username='$user_reg'"; 
						$result=mysql_db_query($dbname,$sql); 
						$num=mysql_num_rows($result);
						if($num > 0) {
							echo "<div class='alert alert-danger' style='font-color:red; font-weight:bold;'>ERROR : Username ซ้าครับ</div>"; 
							exit();
						}
	
						$sql="insert into tb_member values('','$user_reg','$pass_reg','$name_reg','$sex_reg', '$email_reg','$tel_reg','$address_reg','$date_reg');"; 
						$result=mysql_db_query($dbname,$sql);
						if ($result) {
							echo "<div class='alert alert-success' style='font-color:white; font-weight:bold;'>ข้อมูลของท่านถูกบันทึกเรียบร้อยแล้วครับ</div>";
							echo "<A HREF='login.php' class='btn btn-primary btn-block'>คลิกเพื่อเข้าระบบสมาชิก </A><BR><BR>";
						} else {
							echo "<div class='alert alert-danger' style='font-color:red; font-weight:bold;'>ไม่สามารถสมัครสมาชิกได้</div>"; 
						}
						mysql_close();
					?>
				</div>
			</div>
		</div>
	</div>
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