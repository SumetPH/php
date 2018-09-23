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
				<div class="panel-title" style="font-weight:bold;">เข้าสู่ระบบ</div>
			</div>
			<div class="panel-body">
				<form class="form" action="chkmember.php" method="post">
					<!-- <!—รูป จัดใ ้อยู่กึ่งกลาง   -->
					<div class="text-center">
						<!-- <img class="img" style="width:60%;" src="images/login_key.png" alt="ไม่เจอรูปภาพ"> -->
					</div>
					<!-- <!—End Pic  -->
					<p>
					</p>
					<!-- <!—จัดกลุ่มช่องรับข้อมูลทั้ง 2 ตั   -->
					<div class="form-group">
						<!-- <!—จัดกลุ่ม ช่องรับข้อมูล Password  -->
						<div class="input-group">
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-user"></i>
							</span>
							<input type="text" class="form-control" size="30" placeholder="Username" name="user_login">
						</div>
						<!-- <!—End Group Username  -->
						<p>
						</p>
						<!-- <!—จัดกลุ่ม ช่องรับข้อมูล Password  -->
						<div class="input-group">
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-lock"></i> </span>
							<input type="password" class="form-control" size="30" placeholder="Password" name="pass_login">
						</div>
						<!-- <!—End Group Password  -->
					</div>
					<!-- <!—End Group  -->
					<p>
					</p>
					<!-- <!—ีปม่กด <!—Classbtn-block ั่งใ ้button ุดขอบpanel  -->
					<button type="submit" class="btn btn-success btn-block font-rsu">
						<i class="fa fa-spinner fa-spin fa-lg"></i>
						<span style="font-size:18px; font-weight:bold;">เข้าสู่ระบบ</span>
					</button>
					<button type="reset" class="btn btn-danger btn-block font-rsu"> <i class="fa fa-refresh fa-spin fa-lg"></i>
						<span style="font-size:18px; font-weight:bold;">กรอกข้อมูลใหม่</span> </button>
					<!-- <!—End Button  <!—จัดใ ้ชิดข า  -->
					<div class="pull-right">
						<a href="register.html" class="btn btn-link" style="font-weight:bold;">สมัครสมาชิก</a>
						<a href="forgetpassword.html" class="btn btn-link" style="font-weight:bold;">ลืมรหัสผ่าน</a>
					</div>
					<!-- <!—End right  -->
				</form>
			</div>
		</div>
	</div>
	<!-- <!—End Panel Login -->
</body>

</html>