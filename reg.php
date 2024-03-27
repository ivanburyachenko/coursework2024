<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- <link rel="stylesheet" href="css/text.css"> -->
    <link rel="stylesheet" href="css/reg.css">
    <title>reg</title>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <main>
        <div class='container'>
            <form action="reg.php" method="POST">
                <h1>Реєстрація</h1>
                <p>Вітаємо Вас на нашому сайті!</p>
                <div class="input-name relative">
                    <input type="text" id='name' class="input" name="name" placeholder="">
                    <label for="name" class="placeholder">Ім'я</label>
                </div>
                <div class="input-surname relative">
                    <input type="text" id='surname' class="input" name="surname" placeholder="">
                    <label for="surname" class="placeholder">Ваше прізвище</label>
                </div>
                <div class="input-surname relative">
                    <input type="text" id='username' class="input" name="username" placeholder="">
                    <label for="username" class="placeholder">Ваш логін(англійською)</label>
                </div>
                <div class="input-surname relative">
                    <input type="password" id='password' class="input" name="password" placeholder="">
                    <label for="password" class="placeholder">Ваш пароль</label>
                </div>
                <input type="submit" class="submit" name="submit" value="Зареєструватися">
                <?php
                include ("db/db.php");
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
                    if ($name && $surname && $username && $password) {
                        if (strlen($password) >= 8) {
                            $name = trim($name);
                            $username = trim($username);
                            $password = trim($password);
                            $surname = trim($surname);
                            $query = mysqli_query($db, "SELECT id FROM users WHERE loginu='$username'");
                            if (!mysqli_num_rows($query) > 0) {
                                if (mysqli_query($db, "INSERT INTO users (isAdmin,nameu,surnameu,pass,loginu) VALUES(0,'$name', '$surname','$password','$username')")) {
                                    exit ('<p>Ви успішно зареєструвались!</p>');
                                }
                            } else {
                                exit ('<p>Такий логін вже зареєстровано!</p>');
                            }
                            header('Location: auth.php');
                        } else {
                            exit ('<p>Ваш пароль менше ніж 8 символів!<p>');
                        }
                    } else {
                        exit ("<p>Ви не заповнили усі поля!<p>");
                    }
                }
                ?>
            </form>
        </div>
        <p id='auth'>У вас є аккаунт? <a href="auth.php">Авторизуватися</a></p>
    </main>
</body>

</html>