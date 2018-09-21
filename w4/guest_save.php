<!DOCTYPE HTML>
<html>

<head>
	<title>สมุดเยี่ยม</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<span class="logo"><img src="images/logo.svg" alt="" /></span>
			<h1>สมุดเยี่ยม</h1>
			<p>Power by SumetPH</p>
		</header>

		<!-- Main -->
		<div id="main">

			<!-- Introduction -->
			<section id="intro" class="main">
				<? 
					$name_insert = $_POST[name_insert];
					$email_insert = $_POST[email_insert];
					$messges_insert = $_POST[messages_insert];
					$today_insert = date("Y-m-d H:i:s");

					if($name_insert == "" OR $messges_insert == ""){
						echo "<h3><a href='index.html'>Error : กรุณากรอกข้อมูลให้ครบ</a></h3>";
						exit();
					}

					echo "ชื่อ - นาสกุล : $name_insert <br> อีเมล : $email_insert <br> ข้อความ : $messges_insert <br>";

					include "connect.php";
					$sql = "insert into tb_guestbook values('','$name_insert','$email_insert','$messges_insert','$today_insert')";
					$result = mysql_db_query($dbname,$sql);
					if($result){
						echo "<h3>ข้อมูลของท่านถูกบันทึกเรียบร้อยแล้วครับ</h3>";
						echo "<a href='guest_view.php'>คลิกเพื่ออ่านสมุดเยี่ยม</a>";
					} else {
						echo "<h3>Error : ไม่สามารถบันทึกข้อมูลได้</h3>";
					}

					mysql_close();
				?>
			</section>

		</div>

		<!-- Footer -->
		<footer id="footer">

			<section>
				<h2>Profile</h2>
				<dl class="alt">
					<dt>Name</dt>
					<dd>Sumet Phongphila</dd>
					<dt>Phone</dt>
					<dd>09306571xx</dd>
					<dt>Email</dt>
					<dd><a href="#">notsumet1@gmail.com</a></dd>
				</dl>
			</section>
			<section>
				<h3>Social</h3>
				<ul class="icons">
					<li><a href="#" class="icon fa-twitter alt"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon fa-facebook alt"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon fa-instagram alt"><span class="label">Instagram</span></a></li>
					<p></p>
					<li><a href="#" class="icon fa-github alt"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon fa-dribbble alt"><span class="label">Dribbble</span></a></li>
				</ul>
			</section>
			<p class="copyright">&copy; Untitled. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>