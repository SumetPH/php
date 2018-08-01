<?
    // get values   
    $username = $_GET[username];
    $password = $_GET[password];
    $nametitle = $_GET[nametitle];
    $firstname = $_GET[firstname];
    $lastname = $_GET[lastname];
    $gender = $_GET[gender];
    $bday = $_GET[bday];
    // $date = $_GET[date];
    // $month = $_GET[month];
    // $year = $_GET[year];
    $age = $_GET[age];
    $email = $_GET[email];
    $hobby1 = $_GET[hobby1];
    $hobby2 = $_GET[hobby2];
    $hobby3 = $_GET[hobby3];
    $hobby4 = $_GET[hobby4];

    // show values
    echo "<div>";
    echo "::: Your details ::: <br>";
    echo "Username : $username <br>";
    echo "Password : $password <br>";
    echo "Name : $nametitle $firstname $lastname<br>";
    echo "Gender : $gender <br>";
    // echo "Date of Birth : $date $month $year <br>";
    echo "Birthday : $bday <br>";
    echo "Age : $age <br>";
    echo "Email : $email <br>";
    echo "Hobby : $hobby1 $hobby2 $hobby3 $hobby4";
    echo "</div>";
?>