<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="./css/css-main.css" rel="stylesheet" type="text/css">
	<title>เกิดข้อผิดพลาด</title>
</head>

<body class="color-white">
	<!-- <!—Menu  -->
	<div class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar- ex-collapse">
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
				<div class="panel-title" style="font-weight:bold;">เกิดข้อผิดพลาด</div>
			</div>
			<div class="panel-body">
				<? 
					$user_forget=$_POST[user_forget]; 
					if ($user_forget=="") {
						echo "<div class='alert alert-danger' style='font-size:18px; font-weight:bold;'>ERROR : กรุณากรอกข้อมูลใหัครับด้วยนะครับ<div>"; 
						exit();
					}

					include "connect.php";
					$sql="select * from tb_member where username='$user_forget' "; 
					$result=mysql_db_query($dbname,$sql); 
					$num=mysql_num_rows($result); 
					$record=mysql_fetch_array($result);
					$to=$record[email];
					$password=$record[password];
					if($num<=0) {
						echo "<div class='alert alert-danger' style='font-size:20px; fon-weight:bold;'>ERROR : Username นี้ไม่อยู่ในระบบสมาชิกครับ</div>";
					} else {
						$subject = "<div class='alert alert-danger' style='font-size:20px; font-weight:bold;'>แจ้งร ั ผ่านของระบบ มาชิก</div>";
						$message = "รหัสผ่านของ Username : $user_forget Password : $password";
						$headers = "<div class='div class='alert alert-danger' style='font-size:25px; font-weight:bold;''>From: Member ระบบสมาชิก</div>";
						if (mail($to, $subject, $message, $headers)) {
							echo "<div class='alert alert-danger' style='font-size:20px; font-weight:bold;'>ระบบได้ส่งรหัสผ่านไปทางอีเมลเรียบร้อย</div>";
						} else {
							echo "<div class='alert alert-danger' style='font-size:20px; font-weight:bold;'>ไม่สามารถส่งรหัสผ่านไปทางอีเมลได้</div>"; 
						}
					} 
					
					mysql_close(); 
				?>
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