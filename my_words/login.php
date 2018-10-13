<?php
	$username_login = $_POST[username_login];
	$password_login = $_POST[password_login];

	if($username_login == "" or $password_login == ""){
		echo "<h3>กรุณากรองข้อมูลให้ครบด้วยครับ</h3>";
		exit();
	}

	include('connect.php');
	$sql = "select * from tb_users where username='$username_login' and password='$password_login'";
	$result = mysql_db_query($db_name,$sql);
	$num = mysql_num_rows($result);
	if($num > 0){
		session_start();
		$_SESSION[sess_userid] = session_id();
		$_SESSION[sess_username] = $username_login;
		header("Location: main.php");
	} else {
		echo "<h3>อีเมล หรือ รหัสผ่านของคุณไม่ถูกต้อง</h3>";
		exit();
	}

	mysql_close();