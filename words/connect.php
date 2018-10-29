<?
	$localhost = "localhost";
	$username = "root";
	$password = "12345678";
	$db_name = "db_words";
	$connect = mysql_connect($localhost,$username,$password);
	if(!$connect){
		echo "<h3>ไม่สามารถเชื่อมต่อฐานข้อมูลได้</h3>";
		exit();
	}