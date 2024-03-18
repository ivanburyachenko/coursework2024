<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'header.php';
    ?>
    <form action="fill_anket.php" method="POST">
        <input type="text" placeholder="Введіть ID анкети" name="id">
        <!-- <textarea name="answerAnket" value="Ваша відповідь на анкету"></textarea> -->
        <input type="submit" name="submit" value="Надіслати">
    </form>
</body>
</html>

<?php
session_start();
if ($_POST['submit']) {
    $id = $_POST['id'];
    $query = mysqli_query($db, "SELECT aname, atext FROM anketa WHERE id='$id'");
    $row = mysqli_fetch_array($query);
    if ($query) {
        echo '<h1> aname: ' . $row['aname'] . ' </h1>';
        echo '<h1> atext: ' . $row['atext'] . ' </h1>';
        echo '<textarea name="answerAnket" value="Ваша відповідь на анкету"></textarea>
        <input type="submit" name="submit" value="Надіслати">';
    } else {
        echo mysqli_error($db);
    }
}
?>