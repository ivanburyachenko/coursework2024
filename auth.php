<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/auth.css">
    <title>auth</title>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <main>
        <div class='container'>
            <form action="auth.php" method="POST">
                <h1>Вхід</h1>
                <p>Вітаємо Вас на нашому сайті!</p>
                <div class="input-username relative">
                    <input type="text" id='username' class="input" name="username" placeholder="">
                    <label for="username" class="placeholder">Логін</label>
                </div>
                <div class="input-password relative">
                    <input type="password" id='password' class="input" name='password' placeholder="">
                    <label for="password" class="placeholder">Пароль</label>
                </div>
                <input type="submit" class="submit" name="submit" value="Вхід">
                <?php
                session_start();
                include ("db/db.php");
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
                                $_SESSION['isAdmin'] = $myrow['isAdmin'];
                                header('Location: profile.php');
                            } else {
                                echo '<p>Ваш пароль невірний!<p>';
                            }
                        } else {
                            echo '<p>Ваш логін невірний!<p>' . mysqli_error($db);
                        }
                    } else {
                        echo "<p>Ви не заповнили усі поля!<p>";
                    }
                }
                ?>
            </form>
        </div>
        <p id="reg">Ще не зареєстровані? <a href="reg.php">Зареєструватися</a></p>
    </main>
</body>

</html>