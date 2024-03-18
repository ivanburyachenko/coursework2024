<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <div class='container'>
        <h1>Логін:
            <?php
            session_start();
            echo $_SESSION['loginu'];
            ?>
        </h1>
        <h1>
            Ім'я:
            <?php
            session_start();
            echo $_SESSION['nameu'];
            ?>
        </h1>
        <h1>
            Прізвище:
            <?php
            session_start();
            echo $_SESSION['surnameu'];
            ?>
        </h1>
        <a href="create_anket.php">Створити анкету</a>
        <a href="view_ankets.php">Переглянути анкети</a>
    </div>
</body>

</html>