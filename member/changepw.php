<? include "chksession.php"; ?>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="./js/jquery.min.js"> </script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
	<link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="./css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="./css/css-main.css" rel="stylesheet" type="text/css">
	<title>Member ระบบสมาชิก</title>
</head>

<body>
	<!-- <!—Menu   -->
	<div class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
					<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
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
						<a href="#" style="font-weight:bold;" data-toggle="modal" data-target="#myModal">
							<i class="glyphicon glyphicon-log-out"></i> ออกจากระบบ</a> 
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- <!—End Menu   -->
	<div class="col-md-6 col-md-offset-3" style="padding:10px;">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">เปลี่ยนรหัสผ่าน
					<div class="pull-right" style="margin-top:-5px;">
						<a href="main.php" class="btn btn-warning">
							<i class="glyphicon glyphicon-arrow-left"></i> กลับหน้าหลัก</a>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<form class="form-inline" method="post" action="changepw2.php"> 
					<label>Username :</label>
					<?=$sess_username?>
					<p></p>
					<label>รหัสผ่านเดิม :</label>
					<input type="password" name="oldpass" class="form-control" size="55"> * <p></p>
					<label>รหัสผ่านใหม่ :</label>
					<input type="password" name="newpass" class="form-control" size="55"> * <p></p>
					<label>ยืนยันรหัสผ่านใหม่ :</label>
					<input type="password" name="newpass2" class="form-control" size="55"> * <p></p>
					<hr>
					<div class="pull-right">
						<button type="submit" class="btn btn-success">
							<i class="glyphicon glyphicon-save"></i> บันทึกข้อมูล
						</button>
						<button type="reset" class="btn btn-danger">
							<i class="glyphicon glyphicon-refresh"></i> กรอกข้อมูลใหม่ 
						</button>
					</div>
				</form>
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

<?	include "modal.php"; ?>