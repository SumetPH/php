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
			include('connect.php');

			$word = $_POST[word];
			$type = $_POST[type];
			$trans = $_POST[trans];
			$file_path = 'images/words/' . basename($_FILES[file][name]);

			if($word == "" or $trans == "" or basename($_FILES[file][name] == "")){
				echo "<h3>กรุณากรองข้อมูลให้ครบด้วยครับ</h3>";
				exit();
			}

			move_uploaded_file($_FILES[file][tmp_name],$file_path);
			$sql = "insert into tb_words values('','$word','$type','$trans','$file_path','$_SESSION[sess_username]')";
			$result = mysql_db_query($db_name,$sql);
			if($result){
				echo "<h3>เพิ่มคำศัพท์สำเร็จ</h3>";
				echo "<a href='word_add_form.php'><< กลับสู่หน้าเพิ่มคำศัพท์</a>";
			} else {
				echo "<h3>เพิ่มคำศัพท์ไม่สำเร็จ</h3>";
				echo "<a href='word_add_form.php'><< กลับสู่หน้าเพิ่มคำศัพท์</a>";
			}

			mysql_close();
		?>
		</div>
	</div>
</body>
</html>