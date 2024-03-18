<?php
include '1.php';
$main = '<!DOCTYPE html>
<html>
<head>
    <title>Main</title>
    <style>
        #name_anketa{
            width: 250px;
        }
        input{
            text-align:center;
        }
    </style>
</head>
<body>
    <form method="post" action="site.php">
        <input type="text" name="name_anketa" id="name_anketa"  placeholder="Введите сюда имя вашей анкеты">
        <input type="text" name="text_anketa" id="name_anketa"  placeholder="Введите сюда текст вашей анкеты">
        <input type="submit" name="create_anketa" value="Создать анкету">
    </form>
</body>
</html>';
function succes()
{
    echo '<p>succes</p>';
}
function notsucces()
{
    echo '<p>not succes</p>';
}
mysqli_select_db($dbcn, 'site_forms');
$q4 = "CREATE TABLE IF NOT EXISTS anketa (id INT AUTO_INCREMENT PRIMARY KEY, userid INT, aname VARCHAR(60), atext TEXT,PRIMARY KEY(`id`))ENGINE=InnoDB CHARACTER SET cp1251;";
$q1 = 'CREATE TABLE IF NOT EXISTS users (id INT AUTO_INCREMENT PRIMARY KEY, nameu VARCHAR(30), surnameu VARCHAR(60), pass VARCHAR(30), loginu VARCHAR(30))ENGINE=InnoDB CHARACTER SET cp1251;';
$q2 = 'CREATE TABLE IF NOT EXISTS answers_anketa (id INT AUTO_INCREMENT) PRIMARY KEY, answer TEXT)ENGINE=InnoDB CHARACTER SET cp1251;';
// $q5 = 'INSERT INTO users(nameu, surnameu, pass, loginu) VALUES("andrey", "petrov", "123123", "apetrov")';
echo $main;
if (mysqli_query($dbcn, $q1)) {
    echo '<p>succes</p>';
} else {
    echo '<p>not succes</p>' . mysqli_error($dbcn);
}
if ($_POST['create_anketa']) {
    $nameanketa = $_POST['name_anketa'];
    $textanketa = $_POST['text_anketa'];
    $query = "INSERT INTO anketa(aname, atext, userid) VALUES('$nameanketa','$textanketa', '$userid')";
    if (mysqli_query($dbcn, $query)) {
        echo '<p>succes</p>';
    } else {
        echo '<p>not succes</p>' . mysqli_error($dbcn);
    }
    $unique = date('YmdHis') . '.html';
    $content = '<!DOCTYPE html> 
                <html>
                <head>
                    <title>test</title>
                </head>
                <body>
                    <h1> ' . $nameanketa . ' </h1>
                    <p> ' . $textanketa . ' </p>
                </body>
                </html>';
    file_put_contents($unique, $content);

    header('Location: ' . $unique);
    exit;
}
echo '</table>';
if (mysqli_query($dbcn, $q4)) {
    echo '<p>succes q4</p>';
} else {
    echo '<p>not succes q4</p>' . mysqli_error($dbcn);
}
// if (mysqli_query($dbcn, $q5)) {
//     echo '<p>succes q5</p>';
// } else {
//     echo '<p>not succes q5</p>' . mysqli_error($dbcn);
// }
?>