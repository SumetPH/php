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
			include('connect.php');

			$id = $_POST[id];
			$word = $_POST[word];
			$type = $_POST[type];
			$trans = $_POST[trans];
			$image = $_POST[image];
			$chk_img = $_POST[chk_img];
			$file_path = 'images/words/' . basename($_FILES[file][name]);
			
			if($word == "" or $trans == ""){
				echo "<h3>กรุณากรองข้อมูลให้ครบด้วยครับ</h3>";
				exit();
			}

			if($chk_img == "1"){
				if(basename($_FILES[file][name] == "")){
					echo "<h3>กรุณากรองข้อมูลให้ครบด้วยครับ</h3>";
					exit();
				}

				unlink($image);
				move_uploaded_file($_FILES[file][tmp_name],$file_path);
				$sql = "update tb_words set word='$word', type='$type', trans='$trans', image='$file_path' where id='$id'";
				$result = mysql_db_query($db_name,$sql);
				if($result){
					echo "<h3>แก้ไขคำศัพท์สำเร็จ</h3>";
					echo "<a href='word_show.php'><< กลับสู่หน้าคำศัพท์</a>";
				} else {
					echo "<h3>แก้ไขคำศัพท์ไม่สำเร็จ</h3>";
				}

			} else {
				$sql = "update tb_words set word='$word', type='$type', trans='$trans', image='$image' where id='$id'";
				$result = mysql_db_query($db_name,$sql);
				if($result){
					echo "<h3>แก้ไขคำศัพท์สำเร็จ</h3>";
					echo "<a href='word_show.php'><< กลับสู่หน้าคำศัพท์</a>";
				} else {
					echo "<h3>แก้ไขคำศัพท์ไม่สำเร็จ</h3>";
				}
			}
			
			mysql_close();
		?>
		</div>
	</div>
</body>
</html>