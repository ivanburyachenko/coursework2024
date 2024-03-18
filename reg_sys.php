<?php
include("db/db.php");
$submit = $_POST['submit'];
// $q1 = 'CREATE TABLE IF NOT EXISTS users (id INT AUTO_INCREMENT PRIMARY KEY, nameu VARCHAR(30), surnameu VARCHAR(60), pass VARCHAR(30), loginu VARCHAR(30))ENGINE=InnoDB CHARACTER SET cp1251;';
// if (mysqli_query($db, $q1)) {
//     echo '<p>succes q4</p>';
// } else {
//     echo '<p>not succes q4</p>' . mysqli_error($dbcn);
// }
if ($submit) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $checkbox = $_POST['checkbox'];
    if ($name && $surname && $username && $password && $checkbox) {
        if (strlen($password) >= 8) {
            $name = trim($name);
            $username = trim($username);
            $password = trim($password);
            $surname = trim($surname);
            $query = mysqli_query($db, "SELECT id FROM users WHERE loginu='$username'");
            $myrow = mysqli_fetch_array($query);
            if (!empty($myrow["id"])) {
                exit('Ваш логін вже зареєстровано!');
            }
            mysqli_query($db, "INSERT INTO users (nameu,surnameu,pass,loginu) VALUES('$name', '$surname','$password','$username')");
        } else {
            exit('Ваш пароль менше ніж 8 символів!');
        }
    } else {
        exit("Ви не заповнили усі поля!");
    }
}
?>