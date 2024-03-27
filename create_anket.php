<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/create_anket.css">
</head>

<body>
    <?php
    include 'header.php';
    ?>
    <div class="container">
        <form action="create_anket.php" method="POST">
            <div class="input-name relative">
                <input type="text" id='country' class="input" required name="country" placeholder="">
                <label for="country" class="placeholder">В якій країні, Ви, навчаєтесь?</label>
            </div>
            <!-- <input class="input" id="isObligatorilyMiddle" type="radio" required name="isObligatorilyMiddle"
                placeholder="Обов’язкова середня освіта в країні, де ви мешкаєте?">
            <label for="isObligatorilyMiddle">Так</label>
            <label for="isObligatorilyMiddle">Ні</label> -->
            <label for="isObligatorilyMiddle">Обов’язкова середня освіта в країні, де ви мешкаєте?</label>
            <div class='select'>
                <select name="isObligatorilyMiddle" id="isObligatorilyMiddle">
                    <option value="Ні">Ні</option>
                    <option value="Так">Так</option>
                </select>
            </div>
            <div class="input-name relative">
                <input type="text" id='howManyYearsLearning' class="input" required name="howManyYearsLearning"
                    placeholder="">
                <label for="howManyYearsLearning" class="placeholder">Скільки років триває навчання в школі в країні, в
                    якій ви перебуваєте?</label>
            </div>
            <div class="input-name relative">
                <input type="text" id='cityAfter' class="input" required name="cityAfter" placeholder="">
                <label for="cityAfter" class="placeholder">В якому місті, Ви, навчаєтесь?</label>
            </div>
            <div class="input-name relative">
                <input type="text" id='nameOfSchool' class="input" required name="nameOfSchool" placeholder="">
                <label for="nameOfSchool" class="placeholder">В якому учбовому закладі навчаєтесь? Назва учбового
                    закладу.</label>
            </div>
            <div class="input-name relative">
                <input type="text" id='ageOfStartLearning' class="input" required name="ageOfStartLearning"
                    placeholder="">
                <label for="ageOfStartLearning" class="placeholder">З якого віку починається навчання в школі в країні,
                    де ви
                    знаходитеся?</label>
            </div>
            <div class="input-name relative">
                <input type="text" id='ageOfEndLearning' class="input" required name="ageOfEndLearning" placeholder="">
                <label for="ageOfEndLearning" class="placeholder">В якому віці діти закінчують навчання в країні, де
                    Ви перебуваєте?</label>
            </div>
            <label for="numbering">Нумерація класів починається у прямому чи зворотному порядку?</label>
            <div class='select'>
                <select name="numbering" id="numbering">
                    <option value="Прямому">Прямому</option>
                    <option value="Зворотному">Зворотному</option>
                </select>
            </div>
            <!-- <input class="input" id="numbering" type="radio" required name="numbering"
                placeholder="Нумерація класів починається у прямому чи зворотному порядку?">
            <label for="numbering">Прямому</label>
            <label for="numbering">Зворотному</label> -->
            <div class="input-name relative">
                <input type="text" id='subjects' class="input" required name="subjects" placeholder="">
                <label for="subjects" class="placeholder">Які предмети, Ви, вивчаєте у школі?</label>
            </div>
            <label for="numbering">Скільки днів на тиждень, Ви, навчаєтесь у школі?</label>
            <div class='select'>
                <select name="howManyDaysOfWeekLearning" id="numbering">
                    <option value="1-3">1-3</option>
                    <option value="4-5">4-5</option>
                    <option value="6-7">6-7</option>
                </select>
            </div>
            <!-- <input class="input" id="howManyDaysOfWeekLearning" type="Animate's default" required
                name="howManyDaysOfWeekLearning" placeholder="Скільки днів на тиждень, Ви, навчаєтесь у школі?">
            <label for="howManyDaysOfWeekLearning">1-3</label><br>
            <label for="howManyDaysOfWeekLearning">4-5</label>
            <label for="howManyDaysOfWeekLearning">6-7</label> -->
            <!-- <input class="input" id="input" type="text" required name="howManySubjectsOfDayLearning"
                placeholder="Скільки уроків на день у школі в якій, Ви, навчаєтесь?"> -->
            <label for="howManySubjectsOfDayLearning">Скільки уроків на день у школі в якій, Ви, навчаєтесь?</label>
            <div class='select'>
                <select name="howManySubjectsOfDayLearning" id="howManySubjectsOfDayLearning">
                    <option value="1-3">1-3</option>
                    <option value="4-5">4-5</option>
                    <option value="6-7">6-7</option>
                    <option value="8-9">8-9</option>
                </select>
            </div>
            <div class="input-name relative">
                <input type="text" id='howLongLesson' class="input" required name="howLongLesson" placeholder="">
                <label for="howLongLesson" class="placeholder">Скільки часу триває урок (в хвилинах)?</label>
            </div>
            <!-- <input class="input" id="input" type="text" required name="isUsingMobileOnLessons"
                placeholder="Чи мають право учні користуватись мобільними телефонами в школі?"> -->
            <label for="isUsingMobileOnLessons">Чи мають право учні користуватись мобільними телефонами в школі?</label>
            <div class='select'>
                <select name="isUsingMobileOnLessons" id="isUsingMobileOnLessons">
                    <option value="Ні">Ні</option>
                    <option value="Так">Так</option>
                </select>
            </div>
            <!-- <input class="input" id="input" type="text" required name="isNumbersOrWords"
                placeholder="Оцінювання знань у школі — числами чи буквами?"> -->
            <label for="isNumbersOrWords">Оцінювання знань у школі — числами чи буквами?</label>
            <div class='select'>
                <select name="isNumbersOrWords" id="isNumbersOrWords">
                    <option value="Числами">Числами</option>
                    <option value="Буквами">Буквами</option>
                </select>
            </div>
            <div class="input-name relative">
                <input type="text" id='maxRating' class="input" required name="maxRating" placeholder="">
                <label for="maxRating" class="placeholder">Яка система оцінювання у школі? Який бал є
                    максимальним?</label>
            </div>
            <div class="input-name relative">
                <input type="text" id='minRating' class="input" required name="minRating" placeholder="">
                <label for="minRating" class="placeholder">Яка система оцінювання у школі? Який бал є
                    мінімальним?</label>
            </div>
            <!-- <input class="input" id="input" type="text" required name="isExistsJournal"
                placeholder="Існують у учнів в школі щоденники?"> -->
            <label for="isExistsJournal">Існують у учнів в школі щоденники?</label>
            <div class='select'>
                <select name="isExistsJournal" id="isExistsJournal">
                    <option value="Ні">Ні</option>
                    <option value="Так">Так</option>
                </select>
            </div>
            <div class="input-name relative">
                <input type="text" id='howStudentsGetTheirHomework' class="input" required
                    name="howStudentsGetTheirHomework" placeholder="">
                <label for="howStudentsGetTheirHomework" class="placeholder">Як учні отримують домашні завдання?</label>
            </div>
            <!-- <input class="input" id="input" type="text" required name="isExistsExams"
                placeholder="Чи існують іспити в школі?"> -->
            <label for="isExistsExams">Чи існують іспити в школі?</label>
            <div class='select'>
                <select name="isExistsExams" id="isExistsExams">
                    <option value="Ні">Ні</option>
                    <option value="Так">Так</option>
                </select>
            </div>
            <div class="input-name relative">
                <input type="text" id='whatDocument' class="input" required name="whatDocument" placeholder="">
                <label for="whatDocument" class="placeholder">Який документ отримує учень після закінчення школи в якій
                    ви навчаєтесь?</label>
            </div>
            <!-- <input class="input" id="input" type="text" required name="possibilityEnterToUniversity"
                placeholder="Чи отримують випускники школи право вступу до університету?"> -->
            <label for="possibilityEnterToUniversity">Чи отримують випускники школи право вступу до
                університету?</label>
            <div class='select'>
                <select name="possibilityEnterToUniversity" id="possibilityEnterToUniversity">
                    <option value="Ні">Ні</option>
                    <option value="Так">Так</option>
                </select>
            </div>
            <div class="input-name relative">
                <input type="text" id='positiveEffect' class="input" required name="positiveEffect" placeholder="">
                <label for="positiveEffect" class="placeholder">Ваші позитивні враження від навчання у школі?</label>
            </div>
            <div class="input-name relative">
                <input type="text" id='negativeEffect' class="input" required name="negativeEffect" placeholder="">
                <label for="negativeEffect" class="placeholder">Ваші негативні враження від навчання у школі?</label>
            </div>
            <!-- <input class="input" id="input" type="text" required name="featuresLearning"
                placeholder="Розкажіть про особливості навчання, які вам запам’яталися (випадки, які характеризують систему середньої освіти)."> -->
            <textarea required name="featuresLearning"
                placeholder="Розкажіть про особливості навчання, які вам запам’яталися (випадки, які характеризують систему середньої освіти)."></textarea>
            <div class="input-name relative">
                <input type="text" id='email' class="input" required name="yourEmail" placeholder="">
                <label for="email" class="placeholder">Вкажіть електрону адресу за якою можна звернутись до вас для
                    додаткового питання.</label>
            </div>
            <input class="submit" type="submit" name="submit" value="Надіслати">
        </form>
    </div>
    <?php
    session_start();
    include ("db/db.php");
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
        if (mysqli_query($db, "INSERT INTO anketa (userid,country,isObligatorilyMiddle,howManyYearsLearning,cityAfter,nameOfSchool,ageOfStartLearning,ageOfEndLearning,numbering,subjects,howManyDaysOfWeekLearning,howManySubjectsOfDayLearning,howLongLesson,isUsingMobileOnLessons,isNumbersOrWords,maxRating,minRating,isExistsJournal,howStudentsGetTheirHomework,isExistsExams,whatDocument,possibilityEnterToUniversity,positiveEffect,negativeEffect,featuresLearning,yourEmail) VALUES('$userid','$country','$isObligatorilyMiddle','$howManyYearsLearning','$cityAfter','$nameOfSchool','$ageOfStartLearning','$ageOfEndLearning','$numbering','$subjects','$howManyDaysOfWeekLearning','$howManySubjectsOfDayLearning','$howLongLesson','$isUsingMobileOnLessons','$isNumbersOrWords','$maxRating','$minRating','$isExistsJournal','$howStudentsGetTheirHomework','$isExistsExams','$whatDocument','$possibilityEnterToUniversity','$positiveEffect','$negativeEffect','$featuresLearning','$yourEmail')")) {
            echo 'success query';
        } else {
            echo 'fail query' . mysqli_error($db);
        }
    }
    ?>
</body>

</html>


<!-- CREATE TABLE IF NOT EXISTS anketa (id INT AUTO_INCREMENT PRIMARY KEY, userid INT, cityBefore VARCHAR(60), countryAfter VARCHAR(60), cityAfter VARCHAR(60), likedCountry VARCHAR(60), differences TEXT,PRIMARY KEY(`id`))ENGINE=InnoDB CHARACTER SET cp1251; -->