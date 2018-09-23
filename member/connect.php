<meta charset="utf-8">
<?
	$host = "localhost"; 
	$user = "root"; 
	$pw = "12345678"; 
	$dbname = "db_member";
	$c = mysql_connect($host,$user,$pw);
	mysql_query("SET NAME UTF-8");
	if (!$c) {
		echo "<h3>ERROR : ไม่สามรถติดต่อฐานข้อมูลได้</h3>"; 
		exit();
	} 
?>
