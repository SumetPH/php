<?
    $host = "localhost";
    $user = "root";
    $pw = "12345678";
    $dbname = "db_guestbook";
    $c = mysql_connect($host,$user,$pw);
    if(!$c){
        echo "<h3>ไม่สามารถติดต่อฐานข้อมูลได้</h3>";
        exit();
    }