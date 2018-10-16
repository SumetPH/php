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
			$id = $_POST[id];
			$word = $_POST[word];
			$type = $_POST[type];
			$trans = $_POST[trans];
			$image = $_POST[image];
			
			if($word == "" or $trans == "" or $image == ""){
				echo "<h3>กรุณากรองข้อมูลให้ครบด้วยครับ</h3>";
				exit();
			}
			
			include('connect.php');
			$sql = "update tb_words set word='$word', type='$type', trans='$trans', image='$image' where id='$id'";
			$result = mysql_db_query($db_name,$sql);
			if($result){
				echo "<h3>แก้ไขคำศัพท์สำเร็จ</h3>";
				echo "<a href='word_show.php'><< กลับสู่หน้าคำศัพท์</a>";
			} else {
				echo "<h3>แก้ไขคำศัพท์ไม่สำเร็จ</h3>";
			}
			?>
		</div>
	</div>
</body>
</html>