<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/text.css"> -->
    <title>reg</title>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <div class='container'>
        <form action="reg.php" method="POST">
            <input name="name" type="text" class="input" placeholder="Ваше ім'я">
            <input name="surname" type="text" class="input" placeholder="Ваше прізвище">
            <input name="username" type="text" class="input" placeholder="Ваш логін(англійською)">
            <input name="password" type="password" class="input" placeholder="Ваш пароль">
            <input type="submit" class="input" name="submit" value="Надіслати">
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
                if ($name && $surname && $username && $password) {
                    if (strlen($password) >= 8) {
                        $name = trim($name);
                        $username = trim($username);
                        $password = trim($password);
                        $surname = trim($surname);
                        $query = mysqli_query($db, "SELECT id FROM users WHERE loginu='$username'");
                        if (!mysqli_num_rows($query) > 0) {
                            mysqli_query($db, "INSERT INTO users (nameu,surnameu,pass,loginu) VALUES('$name', '$surname','$password','$username')");
                        } else {
                            exit('<h1>Такий логін вже зареєстровано!</h1>');
                        }
                        header('Location: auth.php');
                    } else {
                        exit('<h1>Ваш пароль менше ніж 8 символів!<h1>');
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