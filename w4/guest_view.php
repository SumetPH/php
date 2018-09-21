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

		<!-- Nav -->
		<nav id="nav">
			<ul>
				<li><a href="index.html">เขียนสมุดเยี่ยม</a></li>
				<li><a href="guest_view.php" class="active">อ่านสมุดเยี่ยม</a></li>
			</ul>
		</nav>

		<!-- Main -->
		<div id="main">

			<!-- Introduction -->
			<section id="intro" class="main">
                <?
                    include "connect.php";
                    $sql = "select * from tb_guestbook";
                    $result = mysql_db_query($dbname,$sql);

                    echo "<h2>อ่านสมุดเยี่ยม</h2>";
                    while($record = mysql_fetch_array($result)){
                        $id = $record[id];
                        $name = $record[name];
                        $email = $record[email];
                        $messages = $record[messages];
                        $today_date = $record[today_date];

                        echo "
                            <div class='border'>
                                <div>
                                    <div style='padding:10px;'>$messages</div>
                                </div>
                                <div>
                                    <b>โดย : </b> $name <b>อีเมล : </b> $email <br>
                                    <b>ลำดับที่ : </b> $id <b>บันทึกเมื่อ : </b> $today_date
                                </div>
                            </div>
                        ";
                    }

                    echo "<h4><a href='index.html'>คลิกเพื่อเขียนสมุดเยี่ยม</a></h4>";
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