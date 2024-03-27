<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/view_ankets.css">
    <script defer src='js/view_ankets.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <main>
        <?php
        include ("db/db.php");
        $query = mysqli_query($db, "SELECT * FROM anketa");
        echo "<form method='post' action='view_ankets.php'>";
        echo "<table class='custom-table' border='1'>
            <tr>
                <th>ID</th>
                <th>userID</th>
                <th>country</th>
                <th>isObligatorilyMiddle</th>
                <th>Вибрати</th>
            </tr>";
        while ($row = $query->fetch_assoc()) {
            echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["userid"] . "</td>
                <td>" . $row["country"] . "</td>
                <td>" . $row["isObligatorilyMiddle"] . "</td>
                <td><div><input type='checkbox' name='selectedRows[]' value='" . $row["id"] . "'></div></td>
                </tr>";
        }
        echo "</table>";
        echo "<br>";
        echo "<input type='submit' class='submit' name='button' value='Показати'>";
        echo "</form>";
        $request = $_POST['button'];
        // mysqli_query($db, "CREATE TABLE IF NOT EXISTS users (id INT AUTO_INCREMENT PRIMARY KEY,isAdmin INT, nameu VARCHAR(30), surnameu VARCHAR(60), pass VARCHAR(30), loginu VARCHAR(30))ENGINE=InnoDB CHARACTER SET cp1251");
        if ($request) {
            if (isset ($_POST["selectedRows"])) {
                $selectedRows = $_POST["selectedRows"];
                echo "<h2>Вибрані рядки:</h2>";
                echo "<ul>";
                foreach ($selectedRows as $rowId) {
                    $query = mysqli_query($db, "SELECT * FROM anketa WHERE id='$rowId'");
                    echo '<table class="chosenTable custom-table" border="1">
                    <tr>
                        <th>ID</th>
                        <th>userID</th>
                        <th>country</th>
                        <th>isObligatorilyMiddle</th>
                        <th>howManyYearsLearning</th>
                        <th>cityAfter</th>
                        <th>nameOfSchool</th>
                        <th>ageOfStartLearning</th>
                        <th>ageOfEndLearning</th>
                        <th>numbering</th>
                        <th>subjects</th>
                        <th>howManyDaysOfWeekLearning</th>
                        <th>howManySubjectsOfDayLearning</th>
                        <th>howLongLesson</th>
                        <th>isUsingMobileOnLessons</th>
                        <th>isNumbersOrWords</th>
                        <th>maxRating</th>
                        <th>minRating</th>
                        <th>isExistsJournal</th>
                        <th>howStudentsGetTheirHomework</th>
                        <th>isExistsExams</th>
                        <th>whatDocument</th>
                        <th>possibilityEnterToUniversity</th>
                        <th>positiveEffect</th>
                        <th>negativeEffect</th>
                        <th>featuresLearning</th>
                        <th>yourEmail</th>
                    </tr>';
                    while ($row = $query->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["userid"] . "</td>
                            <td>" . $row["country"] . "</td>
                            <td>" . $row["isObligatorilyMiddle"] . "</td>
                            <td>" . $row["howManyYearsLearning"] . "</td>
                            <td>" . $row["cityAfter"] . "</td>
                            <td>" . $row["nameOfSchool"] . "</td>
                            <td>" . $row["ageOfStartLearning"] . "</td>
                            <td>" . $row["ageOfEndLearning"] . "</td>
                            <td>" . $row["numbering"] . "</td>
                            <td>" . $row["subjects"] . "</td>
                            <td>" . $row["isObligatorilyMiddle"] . "</td>
                            <td>" . $row["howManyDaysOfWeekLearning"] . "</td>
                            <td>" . $row["howManySubjectsOfDayLearning"] . "</td>
                            <td>" . $row["howLongLesson"] . "</td>
                            <td>" . $row["isUsingMobileOnLessons"] . "</td>
                            <td>" . $row["isNumbersOrWords"] . "</td>
                            <td>" . $row["maxRating"] . "</td>
                            <td>" . $row["isExistsJournal"] . "</td>
                            <td>" . $row["howStudentsGetTheirHomework"] . "</td>
                            <td>" . $row["isExistsExams"] . "</td>
                            <td>" . $row["whatDocument"] . "</td>
                            <td>" . $row["possibilityEnterToUniversity"] . "</td>
                            <td>" . $row["positiveEffect"] . "</td>
                            <td>" . $row["negativeEffect"] . "</td>
                            <td>" . $row["featuresLearning"] . "</td>
                            <td>" . $row["yourEmail"] . "</td>
                            </tr>";

                        echo '</table>';
                    }
                }
                echo "</ul>";
            } else {
                echo "Виберіть рядки!";
            }
        }
        ?>
        <?php
        include ("db/db.php");
        $query = mysqli_query($db, "SELECT * FROM anketa");
        $data = array();
        while ($row = $query->fetch_assoc()) {
            array_push($data, $row['country']);
        }
        $data_for_chart = array_count_values($data);
        $labels = array_keys($data_for_chart);
        $counts = array_values($data_for_chart);
        ?>
        <canvas id="myChart"></canvas>
        <a href="more_diagrams.php"><input type="button" id='more-btn' class="submit" value="Більше діаграм"></a>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: <?php echo json_encode($labels); ?>,
                    datasets: [{
                        label: 'Відповіді',
                        data: <?php echo json_encode($counts); ?>,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.5)',
                            'rgba(54, 162, 235, 0.5)',
                            'rgba(255, 206, 86, 0.5)',
                            'rgba(75, 192, 192, 0.5)',
                            'rgba(153, 102, 255, 0.5)',
                            'rgba(255, 159, 64, 0.5)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                }
            });
        </script>
        <form action="" class='container' method='POST'>
            <div class="input-name relative">
                <input type="text" id='country' class="input" name="country" size='30' placeholder=''>
                <label for="country">Фільтрування анкет по назві країни</label>
            </div>
            <input type="submit" class="submit" name="submit" value="Надіслати">
        </form>
        <?php
        include ("db/db.php");
        $submit = $_POST['submit'];
        if ($submit) {
            if ($_POST['country']) {
                $countrySearch = $_POST['country'];
                $result = mysqli_query($db, "SELECT * FROM anketa WHERE country LIKE '%$countrySearch%'");
                if ($result->num_rows > 0) {
                    echo "<ul>";
                    while ($row = $result->fetch_assoc()) {
                        $query = mysqli_query($db, "SELECT * FROM anketa WHERE id='$row[id]'");
                        echo '<table class="chosenTable custom-table" border="1">
                    <tr>
                        <th>ID</th>
                        <th>userID</th>
                        <th>country</th>
                        <th>isObligatorilyMiddle</th>
                        <th>howManyYearsLearning</th>
                        <th>cityAfter</th>
                        <th>nameOfSchool</th>
                        <th>ageOfStartLearning</th>
                        <th>ageOfEndLearning</th>
                        <th>numbering</th>
                        <th>subjects</th>
                        <th>howManyDaysOfWeekLearning</th>
                        <th>howManySubjectsOfDayLearning</th>
                        <th>howLongLesson</th>
                        <th>isUsingMobileOnLessons</th>
                        <th>isNumbersOrWords</th>
                        <th>maxRating</th>
                        <th>minRating</th>
                        <th>isExistsJournal</th>
                        <th>howStudentsGetTheirHomework</th>
                        <th>isExistsExams</th>
                        <th>whatDocument</th>
                        <th>possibilityEnterToUniversity</th>
                        <th>positiveEffect</th>
                        <th>negativeEffect</th>
                        <th>featuresLearning</th>
                        <th>yourEmail</th>
                    </tr>';
                        echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["userid"] . "</td>
                        <td>" . $row["country"] . "</td>
                        <td>" . $row["isObligatorilyMiddle"] . "</td>
                        <td>" . $row["howManyYearsLearning"] . "</td>
                        <td>" . $row["cityAfter"] . "</td>
                        <td>" . $row["nameOfSchool"] . "</td>
                        <td>" . $row["ageOfStartLearning"] . "</td>
                        <td>" . $row["ageOfEndLearning"] . "</td>
                        <td>" . $row["numbering"] . "</td>
                        <td>" . $row["subjects"] . "</td>
                        <td>" . $row["isObligatorilyMiddle"] . "</td>
                        <td>" . $row["howManyDaysOfWeekLearning"] . "</td>
                        <td>" . $row["howManySubjectsOfDayLearning"] . "</td>
                        <td>" . $row["howLongLesson"] . "</td>
                        <td>" . $row["isUsingMobileOnLessons"] . "</td>
                        <td>" . $row["isNumbersOrWords"] . "</td>
                        <td>" . $row["maxRating"] . "</td>
                        <td>" . $row["isExistsJournal"] . "</td>
                        <td>" . $row["howStudentsGetTheirHomework"] . "</td>
                        <td>" . $row["isExistsExams"] . "</td>
                        <td>" . $row["whatDocument"] . "</td>
                        <td>" . $row["possibilityEnterToUniversity"] . "</td>
                        <td>" . $row["positiveEffect"] . "</td>
                        <td>" . $row["negativeEffect"] . "</td>
                        <td>" . $row["featuresLearning"] . "</td>
                        <td>" . $row["yourEmail"] . "</td>
                    </tr>";
                        echo '</table>';
                    }
                    echo "</ul>";
                } else {
                    echo mysqli_error($db);
                }
            }
        }
        ?>
        <form class='container' action="" method='POST'>
            <label for="filter21">
                <p>Скільки днів на тиждень, Ви, навчаєтесь у школі?</p>
            </label><br>
            <div class='select'>
                <select name="filter21" id="filter21">
                    <option value="1-3">1-3</option>
                    <option value="4-5">4-5</option>
                    <option value="6-7">6-7</option>
                </select>
            </div><br>

            <label for="filter22">
                <p>Скільки уроків на день у школі в якій, Ви, навчаєтесь?</p>
            </label><br>
            <div class='select'>
                <select name="filter22" id="filter22">
                    <option value="1-3">1-3</option>
                    <option value="4-5">4-5</option>
                    <option value="6-7">6-7</option>
                    <option value="8-9">8-9</option>
                </select>
            </div><br>
            <input type="submit" class="submit" name="submit1" value="Надіслати">
        </form>
        <?php
        include ("db/db.php");
        $submit1 = $_POST['submit1'];
        if ($submit1) {
            $filter21 = $_POST['filter21'];
            $filter22 = $_POST['filter22'];
            $result = mysqli_query($db, "SELECT * FROM anketa WHERE howManyDaysOfWeekLearning LIKE '%$filter21%' AND howManySubjectsOfDayLearning LIKE '%$filter22%'");
            if ($result->num_rows > 0) {
                echo "<ul>";
                while ($row = $result->fetch_assoc()) {
                    $query = mysqli_query($db, "SELECT * FROM anketa WHERE id='$row[id]'");
                    echo '<table class="chosenTable custom-table" border="1">
                    <tr>
                        <th>ID</th>
                        <th>userID</th>
                        <th>country</th>
                        <th>isObligatorilyMiddle</th>
                        <th>howManyYearsLearning</th>
                        <th>cityAfter</th>
                        <th>nameOfSchool</th>
                        <th>ageOfStartLearning</th>
                        <th>ageOfEndLearning</th>
                        <th>numbering</th>
                        <th>subjects</th>
                        <th>howManyDaysOfWeekLearning</th>
                        <th>howManySubjectsOfDayLearning</th>
                        <th>howLongLesson</th>
                        <th>isUsingMobileOnLessons</th>
                        <th>isNumbersOrWords</th>
                        <th>maxRating</th>
                        <th>minRating</th>
                        <th>isExistsJournal</th>
                        <th>howStudentsGetTheirHomework</th>
                        <th>isExistsExams</th>
                        <th>whatDocument</th>
                        <th>possibilityEnterToUniversity</th>
                        <th>positiveEffect</th>
                        <th>negativeEffect</th>
                        <th>featuresLearning</th>
                        <th>yourEmail</th>
                    </tr>';
                    echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["userid"] . "</td>
                        <td>" . $row["country"] . "</td>
                        <td>" . $row["isObligatorilyMiddle"] . "</td>
                        <td>" . $row["howManyYearsLearning"] . "</td>
                        <td>" . $row["cityAfter"] . "</td>
                        <td>" . $row["nameOfSchool"] . "</td>
                        <td>" . $row["ageOfStartLearning"] . "</td>
                        <td>" . $row["ageOfEndLearning"] . "</td>
                        <td>" . $row["numbering"] . "</td>
                        <td>" . $row["subjects"] . "</td>
                        <td>" . $row["isObligatorilyMiddle"] . "</td>
                        <td>" . $row["howManyDaysOfWeekLearning"] . "</td>
                        <td>" . $row["howManySubjectsOfDayLearning"] . "</td>
                        <td>" . $row["howLongLesson"] . "</td>
                        <td>" . $row["isUsingMobileOnLessons"] . "</td>
                        <td>" . $row["isNumbersOrWords"] . "</td>
                        <td>" . $row["maxRating"] . "</td>
                        <td>" . $row["isExistsJournal"] . "</td>
                        <td>" . $row["howStudentsGetTheirHomework"] . "</td>
                        <td>" . $row["isExistsExams"] . "</td>
                        <td>" . $row["whatDocument"] . "</td>
                        <td>" . $row["possibilityEnterToUniversity"] . "</td>
                        <td>" . $row["positiveEffect"] . "</td>
                        <td>" . $row["negativeEffect"] . "</td>
                        <td>" . $row["featuresLearning"] . "</td>
                        <td>" . $row["yourEmail"] . "</td>
                    </tr>";
                    echo '</table>';
                }
                echo "</ul>";
            } else {
                echo mysqli_error($db);
            }
        }
        ?>
    </main>
</body>

</htm>