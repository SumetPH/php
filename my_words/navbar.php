<?php 
	session_start();
	include('check_session.php'); 
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="index.php">คลังคำศัพท์</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02"
		aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarColor02">
		<ul class="navbar-nav ml-auto">
			<!-- <li class="nav-item active">
				<a class="nav-link" href="index.html">หน้าหลัก <span class="sr-only">(current)</span></a>
			</li> -->
			<?php 
				$username = $_SESSION[sess_username];

				if($username == "") { 
					echo "
						<li class='nav-item'>
							<a class='nav-link' href='login_form.php'>เข้าสู่ระบบ</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link' href='register_form.php'>ลงทะเบียน</a>
						</li>
					";
				} else {
					echo "
						<li class='nav-item dropdown active'>
							<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
								$username
							</a>
							<div class='dropdown-menu' aria-labelledby='navbarDropdown'>
								<a class='dropdown-item' href='main.php'>หน้าเมนูหลัก</a>
								<a class='dropdown-item' href='logout.php'>ออกจากระบบ</a>
							</div>
						</li>
						<li class='nav-item'>
							<a class='nav-link' href='word_show.php'>คำศัพท์ทั้งหมด</a>
						</li>
						<li class='nav-item'>
							<a class='nav-link' href='word_add_form.php'>เพิ่มคำศัพท์</a>
						</li>
					";
				}
			?>
		</ul>
	</div>
</nav>