<?
    $name = $_POST[name];
    $message = $_POST[message];

    if($name == "" OR $message == ""){
    echo "<h3><a href='index.php'>Error : กรุณากรอกข้อมูลให้ครบด้วยครับ</a></h3>";
    exit();
    }

    include "connect.php";

    $save_date = date("Y-m_d H:i:s");
    $sql = "insert into tb_message values('','$name','$message','$save_date')";
    $result = mysql_db_query($dbname,$sql);
    if($result){
        echo "<script>location.href='index.php';</script>";
    } else {
        echo "<h3>Error : ไม่สามารถบันทึกข้อมูลได้</h3>";
    }

    mysql_close();
?>