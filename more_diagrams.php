<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/more_diagrams.css">
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
        $data = array();
        while ($row = $query->fetch_assoc()) {
            array_push($data, $row['howManyDaysOfWeekLearning']);
        }
        $data_for_chart = array_count_values($data);
        $labels = array_keys($data_for_chart);
        $counts = array_values($data_for_chart);
        ?>
        <div>
            <h1>Скільки днів на тиждень, Ви, навчаєтесь у школі?</h1>
            <canvas class="charts" id="myChart"></canvas>
        </div>
        <!-- <a href="more_diagrams.php"><input type="button" id='more-btn' class="submit" value="Більше діаграм"></a> -->
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
        <?php
        include ("db/db.php");
        $query = mysqli_query($db, "SELECT * FROM anketa");
        $data = array();
        while ($row = $query->fetch_assoc()) {
            array_push($data, $row['howManySubjectsOfDayLearning']);
        }
        $data_for_chart = array_count_values($data);
        $labels = array_keys($data_for_chart);
        $counts = array_values($data_for_chart);
        ?>
        <div>
            <h1>Скільки уроків на день у школі в якій, Ви, навчаєтесь?</h1>
            <canvas class="charts" id="myChart1"></canvas>
        </div>
        <!-- <a href="more_diagrams.php"><input type="button" id='more-btn' class="submit" value="Більше діаграм"></a> -->
        <script>
            var ctx = document.getElementById('myChart1').getContext('2d');
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
        <?php
        include ("db/db.php");
        $query = mysqli_query($db, "SELECT * FROM anketa");
        $data = array();
        while ($row = $query->fetch_assoc()) {
            array_push($data, $row['isUsingMobileOnLessons']);
        }
        $data_for_chart = array_count_values($data);
        $labels = array_keys($data_for_chart);
        $counts = array_values($data_for_chart);
        ?>
        <div>
            <h1>Чи мають право учні користуватись мобільними телефонами в школі?</h1>
            <canvas class="charts" id="myChart2"></canvas>
        </div>
        <!-- <a href="more_diagrams.php"><input type="button" id='more-btn' class="submit" value="Більше діаграм"></a> -->
        <script>
            var ctx = document.getElementById('myChart2').getContext('2d');
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
        <?php
        include ("db/db.php");
        $query = mysqli_query($db, "SELECT * FROM anketa");
        $data = array();
        while ($row = $query->fetch_assoc()) {
            array_push($data, $row['isNumbersOrWords']);
        }
        $data_for_chart = array_count_values($data);
        $labels = array_keys($data_for_chart);
        $counts = array_values($data_for_chart);
        ?>
        <div>
            <h1>Оцінювання знань у школі — числами чи буквами?</h1>
            <canvas class="charts" id="myChart3"></canvas>
        </div>

        <!-- <a href="more_diagrams.php"><input type="button" id='more-btn' class="submit" value="Більше діаграм"></a> -->
        <script>
            var ctx = document.getElementById('myChart3').getContext('2d');
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
        <?php
        include ("db/db.php");
        $query = mysqli_query($db, "SELECT * FROM anketa");
        $data = array();
        while ($row = $query->fetch_assoc()) {
            array_push($data, $row['isExistsExams']);
        }
        $data_for_chart = array_count_values($data);
        $labels = array_keys($data_for_chart);
        $counts = array_values($data_for_chart);
        ?>
        <div>
            <h1>Чи існують іспити в школі?</h1>
            <canvas class="charts" id="myChart4"></canvas>
        </div>
        <!-- <a href="more_diagrams.php"><input type="button" id='more-btn' class="submit" value="Більше діаграм"></a> -->
        <script>
            var ctx = document.getElementById('myChart4').getContext('2d');
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
    </main>
</body>

</html>