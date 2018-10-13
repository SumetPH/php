<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Delete Word</title>
	<link rel="stylesheet" href="css/superhero.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php include('navbar.php') ?>
	<div class="container pt-3">
		<div class="p-5 text-center">
		<?php
			$id = $_GET[id];
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