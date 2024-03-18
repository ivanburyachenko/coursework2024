<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>auth</title>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <div class='container'>
        <form action="auth.php" method="POST">
            <input type="text" class="input" name="username" placeholder="Логін">
            <input type="password" class="input" name='password' placeholder="Пароль">
            <input type="submit" class="input" name="submit" value="Надіслати">
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
                            $_SESSION['nameu'] = $myrow['nameu'];
                            $_SESSION['surnameu'] = $myrow['surnameu'];
                            $_SESSION['userid'] = $myrow['id'];
                            $_SESSION['isAuth'] = true;
                            header('Location: profile.php');
                        } else {
                            exit('<h1>Ваш пароль невірний!<h1>');
                        }
                    } else {
                        exit('<h1>Ваш логін невірний!<h1>' . mysqli_error($db));
                    }
                } else {
                    exit("<h1>Ви не заповнили усі поля!<h1>");
                }
            }
            ?>
        </form>
    </div>
</body>

</html>