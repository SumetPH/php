<?php
	ob_start(); 
	include "chksession.php"; 
?>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="./css/css-main.css" rel="stylesheet" type="text/css">
	<title>รายชื่อสมาชิก</title>
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
							<i class="glyphicon glyphicon-log-out"></i> ออกจากระบบ
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- <!—End Menu  -->
	<div style="padding:10px;">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title" style="font-weight:bold;"> รายชื่อสมาชิก
					<div class="pull-right" style="margin-top:-5px;">
						<a href="main.php" class="btn btn-warning">
							<i class="glyphicon glyphicon-arrow-left"></i> กลับหน้าหลัก</a>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<div class="alert alert-info">แสดงสมาชิกทั้งหมดและลบสมาชิก</div>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<td style="font-weight:bold; text-align:center;">ลำดับ</td>
							<td style="font-weight:bold; text-align:center;">ชื่อ-สกุล</td>
							<td style="font-weight:bold; text-align:center;">เพศ</td>
							<td style="font-weight:bold; text-align:center;">อีเมล</td>
							<td style="font-weight:bold; text-align:center;">โทรศัพท์</td>
							<td style="font-weight:bold; text-align:center;">ที่อยู่</td>
							<td style="font-weight:bold; text-align:center;">ต้องการ</td>
						</tr>
					</thead>
					<tbody>
						<?
							$count=0;

							include "connect.php";
							$sql="select * from tb_member order by name"; 
							$result=mysql_db_query($dbname,$sql); 
							while($record=mysql_fetch_array($result)) {
								$count++; 
								echo "<tr>
								<td>$count</td>
								<td>$record[name]</td>
								<td>$record[sex]</td>
								<td>$record[email]</td>
								<td>$record[telephone]</td>
								<td>$record[address]</td>
								<td class='text-center'><a href=\"delete.php?id_del=$record[id]\"
								class='btn btn-danger' onclick=\"return confirm(' ต้องการลบ $record[name] ออกจากระบบจริง รือไม่ ')\">
								<i class='glyphicon glyphicon-remove'></i> ลบข้อมูลนี้</a></td> </tr>";
							}
							mysql_close(); 
						?>
					<tbody>
				</table>
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

<?php include "modal.php"; ?>