<?
	Include "chksession.php"; 
	include "function.php"; 
	include "connect.php";
	$sql="select * from tb_member where username='$sess_username'"; 
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
	<title>แก้ไขข้อมูลส่วนนตัว</title>
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
				<a class="navbar-brand font-20" href="#">My Website</a> </div>
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
	<div class="col-md-6 col-md-offset-3" style="padding:10px;">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="panel-title">แก้ไขข้อมูลส่วนนตัว
					<div class="pull-right" style="margin-top:-5px;">
						<a href="main.php" class="btn btn-warning">
							<i class="glyphicon glyphicon-arrow-left"></i> กลับหน้าหลัก</a>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<form method="POST" ACTION="edit2.php" class="form-inline"> <label>Username : </label>
					<span class="label label-primary font-16">
						<?=$username?>
					</span>
					<p></p> 
					<label>ชื่อ-สกุล : </label>
					<span class="label label-primary font-16">
						<?=$name?>
					</span>
					<p></p> <label>เพศ : </label>
					<span class="label label-primary font-16">
						<?=$sex?>
					</span>
					<p></p>
					<label>อีเมล : </label>
					<input name="email_edit" type="text" value="<?=$email?>" size="50" class="form-control"> * 
					<p></p> 
					<label>โทรศัพท์ : </label>
					<input name="tel_edit" type="text" value="<?=$telephone?>" size="50" class="form- control">
					<p></p>
					<label>ที่อยู่ติดต่อ :</label>
					<textarea name="address_edit" cols="50" rows="3" class="form- control"><?=$address;?></textarea>
					<p></p>
					<label>สมัครเมื่อ:</label>
					<span class="label label-primary font-16">
						<?=displaydate($reg_date);?>
					</span>
					<p></p>
					<hr>
					<div class="pull-right">
						<button type="submit" class="btn btn-success" style="font-weight:bold;"> <i class="glyphicon glyphicon-save"></i>บันทึกข้อมูล</button>
						<button type="reset" class="btn btn-danger" style="font-weight:bold;"> <i class="glyphicon glyphicon-refresh"></i>กรอกข้อมูลใหม่</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>

</html>

<? include "modal.php"; ?>