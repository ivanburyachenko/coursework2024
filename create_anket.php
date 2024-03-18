<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/create_anket.css">
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <div class="container">
        <form action="create_anket.php" method="POST">
            <input class="input" id="input" type="text" required name="country"
                placeholder="В якій країні, Ви, навчаєтесь?">
            <!-- <input class="input" id="isObligatorilyMiddle" type="radio" required name="isObligatorilyMiddle"
                placeholder="Обов’язкова середня освіта в країні, де ви мешкаєте?">
            <label for="isObligatorilyMiddle">Так</label>
            <label for="isObligatorilyMiddle">Ні</label> -->
            <label for="isObligatorilyMiddle">Обов’язкова середня освіта в країні, де ви мешкаєте?</label>
            <select name="isObligatorilyMiddle" id="isObligatorilyMiddle">
                <option value="Ні">Ні</option>
                <option value="Так">Так</option>
            </select>
            <input class="input" id="input" type="text" required name="howManyYearsLearning"
                placeholder="Скільки років триває навчання в школі в країні, в якій ви перебуваєте?">
            <input class="input" id="input" type="text" required name="cityAfter"
                placeholder="В якому місті, Ви, навчаєтесь?">
            <input class="input" id="input" type="text" required name="nameOfSchool"
                placeholder="В якому учбовому закладі навчаєтесь? Назва учбового закладу.">
            <input class="input" id="input" type="text" required name="ageOfStartLearning"
                placeholder="З якого віку починається навчання в школі в країні, де ви знаходитеся?">
            <input class="input" id="input" type="text" required name="ageOfEndLearning"
                placeholder="В якому віці діти закінчують навчання в країні, де Ви перебуваєте?">
            <label for="numbering">Нумерація класів починається у прямому чи зворотному порядку?</label>
            <select name="numbering" id="numbering">
                <option value="Прямому">Прямому</option>
                <option value="Зворотному">Зворотному</option>
            </select>
            <!-- <input class="input" id="numbering" type="radio" required name="numbering"
                placeholder="Нумерація класів починається у прямому чи зворотному порядку?">
            <label for="numbering">Прямому</label>
            <label for="numbering">Зворотному</label> -->
            <input class="input" id="input" type="text" required name="subjects"
                placeholder="Які предмети, Ви, вивчаєте у школі?">
            <label for="numbering">Скільки днів на тиждень, Ви, навчаєтесь у школі?</label>
            <select name="howManyDaysOfWeekLearning" id="numbering">
                <option value="1-3">1-3</option>
                <option value="4-5">4-5</option>
                <option value="6-7">6-7</option>
            </select>
            <!-- <input class="input" id="howManyDaysOfWeekLearning" type="Animate's default" required
                name="howManyDaysOfWeekLearning" placeholder="Скільки днів на тиждень, Ви, навчаєтесь у школі?">
            <label for="howManyDaysOfWeekLearning">1-3</label><br>
            <label for="howManyDaysOfWeekLearning">4-5</label>
            <label for="howManyDaysOfWeekLearning">6-7</label> -->
            <!-- <input class="input" id="input" type="text" required name="howManySubjectsOfDayLearning"
                placeholder="Скільки уроків на день у школі в якій, Ви, навчаєтесь?"> -->
            <label for="howManySubjectsOfDayLearning">Скільки уроків на день у школі в якій, Ви, навчаєтесь?</label>
            <select name="howManySubjectsOfDayLearning" id="howManySubjectsOfDayLearning">
                <option value="1-3">1-3</option>
                <option value="4-5">4-5</option>
                <option value="6-7">6-7</option>
                <option value="8-9">8-9</option>
            </select>
            <input class="input" id="input" type="text" required name="howLongLesson"
                placeholder="Скільки часу триває урок (в хвилинах)?">
            <!-- <input class="input" id="input" type="text" required name="isUsingMobileOnLessons"
                placeholder="Чи мають право учні користуватись мобільними телефонами в школі?"> -->
            <label for="isUsingMobileOnLessons">Чи мають право учні користуватись мобільними телефонами в школі?</label>
            <select name="isUsingMobileOnLessons" id="isUsingMobileOnLessons">
                <option value="Ні">Ні</option>
                <option value="Так">Так</option>
            </select>
            <!-- <input class="input" id="input" type="text" required name="isNumbersOrWords"
                placeholder="Оцінювання знань у школі — числами чи буквами?"> -->
            <label for="isNumbersOrWords">Оцінювання знань у школі — числами чи буквами?</label>
            <select name="isNumbersOrWords" id="isNumbersOrWords">
                <option value="Числами">Числами</option>
                <option value="Буквами">Буквами</option>
            </select>
            <input class="input" id="input" type="text" required name="maxRating"
                placeholder="Яка система оцінювання у школі? Який бал є максимальним?">
            <input class="input" id="input" type="text" required name="minRating"
                placeholder="Яка система оцінювання у школі? Який бал є мінімальним?">
            <!-- <input class="input" id="input" type="text" required name="isExistsJournal"
                placeholder="Існують у учнів в школі щоденники?"> -->
            <label for="isExistsJournal">Існують у учнів в школі щоденники?</label>
            <select name="isExistsJournal" id="isExistsJournal">
                <option value="Ні">Ні</option>
                <option value="Так">Так</option>
            </select>
            <input class="input" id="input" type="text" required name="howStudentsGetTheirHomework"
                placeholder="Як учні отримують домашні завдання?">
            <!-- <input class="input" id="input" type="text" required name="isExistsExams"
                placeholder="Чи існують іспити в школі?"> -->
            <label for="isExistsExams">Чи існують іспити в школі?</label>
            <select name="isExistsExams" id="isExistsExams">
                <option value="Ні">Ні</option>
                <option value="Так">Так</option>
            </select>
            <input class="input" id="input" type="text" required name="whatDocument"
                placeholder="Який документ отримує учень після закінчення школи в якій ви навчаєтесь?">
            <!-- <input class="input" id="input" type="text" required name="possibilityEnterToUniversity"
                placeholder="Чи отримують випускники школи право вступу до університету?"> -->
            <label for="possibilityEnterToUniversity">Чи отримують випускники школи право вступу до
                університету?</label>
            <select name="possibilityEnterToUniversity" id="possibilityEnterToUniversity">
                <option value="Ні">Ні</option>
                <option value="Так">Так</option>
            </select>
            <input class="input" id="input" type="text" required name="positiveEffect"
                placeholder="Ваші позитивні враження від навчання у школі?">
            <input class="input" id="input" type="text" required name="negativeEffect"
                placeholder="Ваші негативні враження від навчання у школі?">
            <!-- <input class="input" id="input" type="text" required name="featuresLearning"
                placeholder="Розкажіть про особливості навчання, які вам запам’яталися (випадки, які характеризують систему середньої освіти)."> -->
            <textarea required name="featuresLearning" id=""
                placeholder="Розкажіть про особливості навчання, які вам запам’яталися (випадки, які характеризують систему середньої освіти)."></textarea>
            <input class="input" id="input" type="email" required name="yourEmail"
                placeholder="Вкажіть електрону адресу за якою можна звернутись до вас для додаткового питання.">
            <input class="input" type="submit" name="submit" value="Надіслати">
        </form>
    </div>
    <?php
    session_start();
    include("db/db.php");
    $submit = $_POST['submit'];
    if ($submit) {
        $country = $_POST['country'];
        $isObligatorilyMiddle = $_POST['isObligatorilyMiddle'];
        $howManyYearsLearning = $_POST['howManyYearsLearning'];
        $cityAfter = $_POST['cityAfter'];
        $nameOfSchool = $_POST['nameOfSchool'];
        $ageOfStartLearning = $_POST['ageOfStartLearning'];
        $ageOfEndLearning = $_POST['ageOfEndLearning'];
        $numbering = $_POST['numbering'];
        $subjects = $_POST['subjects'];
        $howManyDaysOfWeekLearning = $_POST['howManyDaysOfWeekLearning'];
        $howManySubjectsOfDayLearning = $_POST['howManySubjectsOfDayLearning'];
        $howLongLesson = $_POST['howLongLesson'];
        $isUsingMobileOnLessons = $_POST['isUsingMobileOnLessons'];
        $isNumbersOrWords = $_POST['isNumbersOrWords'];
        $maxRating = $_POST['maxRating'];
        $minRating = $_POST['minRating'];
        $isExistsJournal = $_POST['isExistsJournal'];
        $howStudentsGetTheirHomework = $_POST['howStudentsGetTheirHomework'];
        $isExistsExams = $_POST['isExistsExams'];
        $whatDocument = $_POST['whatDocument'];
        $possibilityEnterToUniversity = $_POST['possibilityEnterToUniversity'];
        $positiveEffect = $_POST['positiveEffect'];
        $negativeEffect = $_POST['negativeEffect'];
        $featuresLearning = $_POST['featuresLearning'];
        $yourEmail = $_POST['yourEmail'];
        $userid = $_SESSION['userid'];
        if ($country && $isObligatorilyMiddle && $howManyYearsLearning && $cityAfter && $nameOfSchool && $ageOfStartLearning && $ageOfEndLearning && $numbering && $subjects && $howManyDaysOfWeekLearning && $howManySubjectsOfDayLearning && $howLongLesson && $isUsingMobileOnLessons && $isNumbersOrWords && $maxRating && $minRating && $isExistsJournal && $howStudentsGetTheirHomework && $isExistsExams && $whatDocument && $possibilityEnterToUniversity && $positiveEffect && $negativeEffect && $featuresLearning && $yourEmail) {
            if (mysqli_query($db, "INSERT INTO anketa (userid,country,isObligatorilyMiddle,howManyYearsLearning,cityAfter,nameOfSchool,ageOfStartLearning,ageOfEndLearning,numbering,subjects,howManyDaysOfWeekLearning,howManySubjectsOfDayLearning,howLongLesson,isUsingMobileOnLessons,isNumbersOrWords,maxRating,minRating,isExistsJournal,howStudentsGetTheirHomework,isExistsExams,whatDocument,possibilityEnterToUniversity,positiveEffect,negativeEffect,featuresLearning, yourEmail) VALUES('$userid', '$country','$isObligatorilyMiddle','$howManyYearsLearning','$cityAfter','$nameOfSchool','$ageOfStartLearning','$ageOfEndLearning','$numbering','$subjects','$howManyDaysOfWeekLearning','$howManySubjectsOfDayLearning','$howLongLesson','$isUsingMobileOnLessons','$isNumbersOrWords','$maxRating','$minRating','$isExistsJournal','$howStudentsGetTheirHomework','$isExistsExams','$whatDocument','$possibilityEnterToUniversity','$positiveEffect','$negativeEffect','$featuresLearning','$yourEmail')")) {
                echo 'succes query';
            } else {
                echo 'fail query' . mysqli_error($db);
            }
            echo 'succes perem';
        }
    }
    // $q = 'CREATE TABLE IF NOT EXISTS anketa (id INT AUTO_INCREMENT, userid INT, country VARCHAR(60), isObligatorilyMiddle VARCHAR(60), howManyYearsLearning VARCHAR(60), cityAfter VARCHAR(60), nameOfSchool VARCHAR(60), ageOfStartLearning VARCHAR(60), ageOfEndLearning VARCHAR(60), numbering VARCHAR(60),subjects TEXT,howManyDaysOfWeekLearning VARCHAR(60),howManySubjectsOfDayLearning VARCHAR(60),howLongLesson VARCHAR(60),isUsingMobileOnLessons VARCHAR(60),isNumbersOrWords VARCHAR(60),maxRating VARCHAR(60),minRating VARCHAR(60),isExistsJournal VARCHAR(60),howStudentsGetTheirHomework VARCHAR(60), isExistsExams VARCHAR(60),whatDocument VARCHAR(60),possibilityEnterToUniversity VARCHAR(60),positiveEffect TEXT,negativeEffect TEXT,featuresLearning TEXT,yourEmail VARCHAR(60),PRIMARY KEY(`id`))ENGINE=InnoDB CHARACTER SET cp1251;';
    // if (mysqli_query($db, $q)) {
    //     echo '<p>succes q4</p>';
    // } else {
    //     echo '<p>not succes q4</p>' . mysqli_error($db);
    // }
    ?>
</body>

</html>


<!-- CREATE TABLE IF NOT EXISTS anketa (id INT AUTO_INCREMENT PRIMARY KEY, userid INT, cityBefore VARCHAR(60), countryAfter VARCHAR(60), cityAfter VARCHAR(60), likedCountry VARCHAR(60), differences TEXT,PRIMARY KEY(`id`))ENGINE=InnoDB CHARACTER SET cp1251; -->