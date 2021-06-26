<?php
session_start();
require_once "include/header.php";
foreach ($_POST as $key => $value) {
    array_push($_SESSION['inputs'], $value);

    if (count($_SESSION['inputs']) == 9) {



        echo $_SESSION[0];
        echo $_SESSION[8];
    }
}
?>



<head>
    <meta charset=UTF-8" />

    <title>Nature Quest</title>

    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <div id="resultBox">

        <h1>Congratulations! Here are your results.</h1>

        <?php



        $answer1 = $_POST['question-1-answers'];
        $answer2 = $_POST['question-2-answers'];
        $answer3 = $_POST['question-3-answers'];
        $answer4 = $_POST['question-4-answers'];
        $answer5 = $_POST['question-5-answers'];
        $answer6 = $_POST['question-6-answers'];
        $answer7 = $_POST['question-7-answers'];
        $answer8 = $_POST['question-8-answers'];
        $answer9 = $_POST['question-9-answers'];



        $totalCorrect = 0;

        if ($answer1 == "C") {
            $totalCorrect++;
        }
        if ($answer2 == "D") {
            $totalCorrect++;
        }
        if ($answer3 == "A") {
            $totalCorrect++;
        }
        if ($answer4 == "C") {
            $totalCorrect++;
        }
        if ($answer5 == "B") {
            $totalCorrect++;
        }
        if ($answer6 == "D") {
            $totalCorrect++;
        }
        if ($answer7 == "A") {
            $totalCorrect++;
        }
        if ($answer8 == "B") {
            $totalCorrect++;
        }
        if ($answer9 == "B") {
            $totalCorrect++;
        }

        echo "<div id='results'>$totalCorrect / 9 correct</div>";



        ?>

    </div>

</body>

</html>





<?php require_once "include/footer.php" ?>