<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>my anket:</h1>
</body>

</html>
<?php
session_start();
include("db/db.php");
$userid = $_SESSION['userid'];

$query = mysqli_query($db, "SELECT aname, atext FROM anketa WHERE userid='$userid'");
if ($query) {
    while ($row = mysqli_fetch_array($query)) {
        echo '<h1> aname: ' . $row['aname'] . ' </h1>';
        echo '<h1> atext: ' . $row['atext'] . ' </h1>';
    }
    
}
?>