<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">
</head>

<body>
    <header>
        <a href="index.php"><img src="img/logo.png" width="40px" alt=""></a>
        <a href="articles.php">
            <p>Статті про освіту за кордоном</p>
        </a>
        <a href="more.php">
            <p>Більше про освіту за кордоном</p>
        </a>
        <?php
        session_start();
        if ($_SESSION['loginu']) {
            echo '<a href="profile.php"><p>Профіль</p></a>';
            echo '<a href="create_anket.php"><p>Заповнити анкету</p></a>';
            if ($_SESSION['isAdmin'] == '1') {
                echo '<a href="view_ankets.php"><p>Дивитися анкети</p></a>';
            }
        } else {
            echo '<a href="auth.php">
                        <div class="login flex">
                            <img src="img/auth.png" width="30px" alt="">
                            <p>Вхід</p>
                        </div>
                    </a>
                ';
        }
        ?>
    </header>
</body>

</html>