<?php ob_start(); ?>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="./css/css-main.css" rel="stylesheet" type="text/css">
	<title>ลบข้อมูล</title>
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
						</a>
					</li>
					<li>
						<a href="#" style="font-weight:bold;" data-toggle="modal" data-target="#myModal">
							<i class="glyphicon glyphicon-log-out"></i> ออกจากระบบ</a>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- <!—End Menu  -->
	<div style="padding:10px;">
		<div class="col-md-5 col-md-offset-4 col-sm-12 col-md-sm-offset-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title" style="font-weight:bold;">ลบข้อมูล</div>
				</div>
				<div class="panel-body">
					<?
						$id_del=$_GET[id_del]; 

						include "connect.php";
						$sql="delete from tb_member where id='$id_del' "; 
						$result=mysql_db_query($dbname,$sql);
						if ($result) {
							echo "<div class='alert alert-success font-18 text-bold'>ลบข้อมูลออกจากระบบเรียบน้อยแล้วครับ</div>";
							echo "<a href='view.php' class='btn btn-primary btn-block'>กลับหน้าหลัก</a>";
						}else{
							echo "<div class='alert alert-danger font-18 text-bold'>ไม่สามารถลบข้อมูลได้ครับ</div>";
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