<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">
</head>

<body>
    <header>
        <a href="index.php">Головна</a>
        <a href="articles.php">Статті про освіту за кордоном</a>
        <a href="more.php">Більше про освіту за кордоном</a>
        <?php
        session_start();
        if ($_SESSION['loginu']) {
            echo '<a href="profile.php">Профіль</a>';
            echo '<a href="create_anket.php">Створити анкету</a>';
            echo '<a href="view_ankets.php">Дивитися анкети</a>';
        } else {
            echo '<a href="reg.php">Реєстрація</a>';
            echo '<a href="auth.php">Авторизація</a>';
        }
        ?>
    </header>
</body>

</html>