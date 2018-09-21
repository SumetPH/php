<?
    $host="localhost";
    $user="root";
    $pw="12345678";
    $dbname="db_message";
    $c = mysql_connect($host,$user,$pw);
    if (!$c) {
        echo "<h3>ไม่สามารถติดต่อฐานข้อมูลได้</h3>";
        exit();
    }
    mysql_set_charset('utf8mb4');
?> 