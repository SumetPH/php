<?php include('check_session.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('head.php'); ?>
</head>
<body>
	<?php 
		session_start();				
		include('navbar.php'); 
		include('connect.php');			
		$sql = "select * from tb_words where username='$_SESSION[sess_username]'";
		$result = mysql_db_query($db_name,$sql);
		$num = mysql_num_rows($result);
	?>
	<div class="container pt-3">
		<div class="p-5 text-center">
			<h3>คำศัพท์ทั้งหมดของคุณ</h3>
			<h5><? echo $num ?> คำ</h5>
		</div>
		<input type="hidden" name="">
		<div id='images' class="row">
			<?php
					while ($record = mysql_fetch_array($result)){
						echo "
						<div class='col-md-4 p-3'>
							<div class='card'>
								<img class='card-img-top' src='$record[image]'>
								<div class='card-body'>
									<div class='d-flex align-items-end'>
										<h4 class='m-0 pr-2'>$record[word]</h4> 
										<small>($record[type])</small>
									</div>
									<p>คำแปล : $record[trans]</p>
								</div>
								<div class='card-footer'>
									<form method='get' action='word_edit_form.php'>
										<input type='hidden' name='id' value='$record[id]'>
										<input type='hidden' name='word' value='$record[word]'>
										<input type='hidden' name='trans' value='$record[trans]'>
										<input type='hidden' name='image' value='$record[image]'>
										<button class='btn btn-warning btn-block' type='submit'>แก้ไข</button>
									</form>
									<a class='btn btn-primary btn-block' href=\"word_delete.php?id=$record[id]\" onclick=\"return confirm('คุณต้องการลบใช่หรือไม่')\">ลบ</a>
								</div>
							</div>
						</div>
						";
					}
				?>
		</div>
	</div>
	<script>
		var viewer = new Viewer(document.getElementById('images'), {
			title: false,
			viewed: function() {
				viewer.zoom(0);
			}
		});
	</script>
</body>
</html>