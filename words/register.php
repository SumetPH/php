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
				$username_reg = $_POST[username_reg]; 
				$password_reg = $_POST[password_reg]; 
				$email_reg = $_POST[email_reg]; 

				if($username_reg == "" or $password_reg == "" or $email_reg == ""){
					echo "<h3>กรุณากรองข้อมูลให้ครบด้วยครับ</h3>";
					exit();
				}

				function checkemail($checkemail) { 
					if(ereg( "^[^@ ]+@([a-zA-Z0-9\-]+\.)+([a-zA-Z0-9\-]{2}|net|com|gov|mil|org|edu|int)$",$checkemail) )  {
						return true; 
					} else {
						return false; 
					}
				} 
				if(!checkemail($email_reg)){
					echo "<h3>กรุณาใส่่อีเมลให้ถูกต้อง</h3>";
					exit();
				}
				
				include('connect.php');
				$sql = "select * from tb_users where username='$username_reg'";
				$result = mysql_db_query($db_name,$sql);
				$num = mysql_num_rows($result);
				if($num > 0){
					echo "<h3>Username มีอยู่ในระบบแล้วครับ</h3>";
					echo "<a href='register_form.php'><< กลับสู่หน้าสมัครสมาชิก</a>";
					exit();
				}

				$sql = "insert into tb_users values('','$username_reg','$password_reg','$email_reg')";
				$result = mysql_db_query($db_name,$sql);
				if($result){
					echo "<h3>สมัครสมาชิกสำเร็จ</h3>";
					echo "<a href='index.php'>กลับสู่หน้าหลัก</a>";
				} else {
					echo "<h3>สมัครสมาชิกไม่สำเร็จ</h3>";
					echo "<a href='register_form.php'><< กลับสู่หน้าสมัครสมาชิก</a>";
				}
				
				mysql_close();
			?>
		</div>
	</div>
</body>
</html>