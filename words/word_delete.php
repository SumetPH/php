<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('head.php'); ?>
</head>
<body>
	<?php include('navbar.php') ?>
	<div class="container pt-3">
		<div class="p-5 text-center">
		<?php
			$id = $_GET[id];
			$image = $_GET[image];
			
			if(strstr($image,"images/words/")){
				unlink($image);
			}

			include('connect.php');
			$sql = "delete from tb_words where id='$id'";
			$result = mysql_db_query($db_name,$sql);
			if($result){
				echo "<h3>ลบคำศัพท์สำเร็จ</h3>";
				echo "<a href='word_show.php'><< กลับสู่หน้าคำศัพท์</a>";
			} else {
				echo "<h3>ลบคำศัพท์ไม่สำเร็จ</h3>";
				echo "<a href='word_show.php'><< กลับสู่หน้าคำศัพท์</a>";
			}
		?>
		</div>
	</div>
</body>
</html>