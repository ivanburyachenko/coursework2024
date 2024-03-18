<?php
session_start();
include("db/db.php");
$submit = $_POST['submit'];
if ($submit) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username && $password) {
        $query = mysqli_query($db, "SELECT * FROM users WHERE loginu='$username'");
        $myrow = mysqli_fetch_array($query);
        $username = trim($username);
        $password = trim($password);
        if ($myrow["loginu"] == $username) {
            if ($myrow["pass"] == $password) {
                $_SESSION['loginu'] = $myrow['loginu'];
                $_SESSION['password'] = $myrow['pass'];
            } else {
                exit('Ваш пароль невірний!');
            }
        } else {
            exit('Ваш логін невірний!' . mysqli_error($db));
        }
    } else {
        exit("Ви не заповнили усі поля!");
    }
}
?>