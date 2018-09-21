<!DOCTYPE HTML>
<html>

<head>
	<title>ฝากข้อความบนเว็บ</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<script>
		function check_data() {
			if (document.frm.name.value == "") {
				alert("กรุณากรอกชื่อด้วยครับ");
				document.frm.name.focus();
				return false;
			} else if (document.frm.message.value == "") {
				alert("กรุณากรอกข้อความด้วยครับ");
				document.frm.message.focus();
				return false
			}
		}

		function add_text(x) {
			document.frm.message.value = document.frm.elements.message.value + " " + x;
			document.frm.message.focus();
		}
	</script>
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<span class="logo"><img src="images/logo.svg" alt="" /></span>
			<h1>ฝากข้อความบนเว็บ</h1>
			<p>Power by SumetPH</p>
		</header>

		<!-- Main -->
		<div id="main">

			<!-- Introduction -->
			<section id="intro" class="main">
				<h2>ฝากข้อความบนเว็บ</h2>

				<table border="2" bordercolor="#0080C0" width="210">
					<tr>
						<td>
							<marquee width="300" height="250" direction="up" onmouseover="stop();" onmouseout="start();" scrollamount="1"
							 scrolldelay="0">
								<?
										  include "connect.php";
										  include "function.php";
										  $sql = "select * from tb_message order by id desc";
										  $result = mysql_db_query($dbname,$sql);
										  while($record = mysql_fetch_array($result)){
												$id = $record[id];
												$name = $record[name];
												$message = $record[message];
												$save_date = $record[save_date];
												$save_date = displaydate_time($save_date);
		  
												echo "<br>$message<br>";
												echo "<b>จาก : </b>$name<br>";
												echo "<b>วัน : </b>$save_date<br>";
												echo "---------------------------------------<br>";
										  }
									 ?>
							</marquee>
						</td>
					</tr>
				</table>

				<form action="save.php" method="POST" onsubmit="return check_data()" name="frm">
					<p></p>
					ชือ : <br>
					<input type="text" name="name">
					<p></p>
					ฝากข้อความ : <br>
					<textarea name="message" cols="33" rows="3"></textarea>
					<p></p>
					<a href="javascript:add_text('😀')">😀</a>
					<a href="javascript:add_text('😂')">😂</a>
					<a href="javascript:add_text('😉')">😉</a>
					<a href="javascript:add_text('😑')">😑</a>
					<a href="javascript:add_text('😛')">😛</a>
					<p></p>
					<input type="submit" value="Submit">
					<input type="reset" value="Reset">
				</form>
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