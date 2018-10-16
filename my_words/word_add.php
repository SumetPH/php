<?php include('check_session.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('head.php'); ?>
</head>
<body>
	<?php include('navbar.php'); ?>
	<div class="container pt-3">
		<div class="p-5 text-center">
		<?php
			session_start();
			$word = $_POST[word];
			$type = $_POST[type];
			$trans = $_POST[trans];
			$image = $_POST[image];
			
			if($word == "" or $trans == "" or $image == ""){
				echo "<h3>กรุณากรองข้อมูลให้ครบด้วยครับ</h3>";
				exit();
			}
			
			include('connect.php');
			$sql = "insert into tb_words values('','$word','$type','$trans','$image','$_SESSION[sess_username]')";
			$result = mysql_db_query($db_name,$sql);
			if($result){
				echo "<h3>เพิ่มคำศัพท์สำเร็จ</h3>";
				echo "<a href='word_add_form.php'><< กลับสู่หน้าเพิ่มคำศัพท์</a>";
			} else {
				echo "<h3>เพิ่มคำศัพท์ไม่สำเร็จ</h3>";
				echo "<a href='word_add_form.php'><< กลับสู่หน้าเพิ่มคำศัพท์</a>";
			}
			?>
		</div>
	</div>
</body>
</html>