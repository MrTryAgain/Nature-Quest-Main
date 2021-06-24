


<?php

$quizData = dataMarc();
$pageData = $quizData['introduction'];

// Initialize achieved number of points
$_SESSION['achievedPoints'] = 0;

function dataMarc()
{
    return array(
        'quizMarc' => quizMarc_dataMarc(),
        'quizMarc1' => quizMarc1_dataMarc(),
        'quizMarc2' => quizMarc2_dataMarc(),
        'quizMarc3' => quizMarc3_dataMarc(),
        'resultMarc' => resultMarc_dataMarc()
    );
}

function quizMarc_dataMarc()
{
    return array(
        'nextAction' => 'question.php',
        'questionID' => 'q0'
    );
}

function quizMarc1_dataMarc()
{
    return array(
        'q0' => quizMarc1_q0(),
        'q1' => quizMarc1_q1(),
        'q2' => quizMarc1_q2()


    );
}

function quizMarc2_dataMarc()
{
    return array(
        'q0' => quizMarc2_q0(),
        'q1' => quizMarc2_q1(),
        'q2' => quizMarc2_q2()


    );
}

function quizMarc3_dataMarc()
{
    return array(
        'q0' => quizMarc3_q0(),
        'q1' => quizMarc3_q1(),
        'q2' => quizMarc3_q2()


    );
}

function quizMarc1_q0()
{
    return array(
        'text' => "How tall is Mount Everest?",
        'answers' => array(
            array("8,289 meters", 0),
            array("8,642 meters", 0),
            array("8,849 meters", 1),
            array("8,927 meters", 0)
        ),
        'nextAction' => 'question.php',
        'questionID' => 'q1'
    );
}

function quizMarc1_q1()
{
    return array(
        'text' => "Which rivers merge to form the Nile?",
        'answers' => array(
            array("White Nile, Yellow Nile, Bishri", 0),
            array("Blue Nile, Atbara, Yellow Nile", 0),
            array("Brown Nile, Bishri, Kamora", 0),
            array("Atbara, White Nile, Blue Nile", 1)
        ),
        'nextAction' => 'report.php'
    );
}

function quizMarc1_q2()
{
    return array(
        'text' => "Where is the lowest point on land?",
        'answers' => array(
            array("Denman Glacier", 1),
            array("Dead Sea", 0),
            array("Lake Assal", 0),
            array("Laguna del Carbon", 0)
        ),
        'nextAction' => 'report.php'
    );
}

function quizMarc2_q0()
{
    return array(
        'text' => "How high are the tallest specimen of trees, the Sequoia Sempervirens, on average?",
        'answers' => array(
            array("70 meters", 0),
            array("110 meters", 0),
            array("90 meters", 1),
            array("60 meters", 0)
        ),
        'nextAction' => 'report.php'
    );
}

function quizMarc2_q1()
{
    return array(
        'text' => "Which country borders the largest lake on Earth?",
        'answers' => array(
            array("Canada", 0),
            array("Kazakhstan", 1),
            array("Uganda", 0),
            array("United States of America", 0)
        ),
        'nextAction' => 'report.php'
    );
}

function quizMarc2_q2()
{
    return array(
        'text' => "How do we call the process by which plants convert sunlight into nutrition?",
        'answers' => array(
            array("Photomorphogenesis", 0),
            array("Tropism", 0),
            array("Photoperiodism", 0),
            array("Photosynthesis", 1)
        ),
        'nextAction' => 'report.php'
    );
}

function quizMarc3_q0()
{
    return array(
        'text' => "Which is the smallest mammal in the world?",
        'answers' => array(
            array("Kitti's Hog-nosed Bat", 1),
            array("Pigmy Jerboa", 0),
            array("Etruscan Shrew", 0),
            array("African Pygmy Mouse", 0)
        ),
        'nextAction' => 'report.php'
    );
}

function quizMarc3_q1()
{
    return array(
        'text' => "How many wings does a bumblebee have?",
        'answers' => array(
            array("Six", 0),
            array("Four", 1),
            array("Eight", 0),
            array("Two", 0)
        ),
        'nextAction' => 'report.php'
    );
}

function quizMarc3_q2()
{
    return array(
        'text' => "Which are the highest located clouds?",
        'answers' => array(
            array("Cumulus", 0),
            array("Cirrus", 1),
            array("Nimbus", 0),
            array("Stratus", 0)
        ),
        'nextAction' => 'report.php'
    );
}





function quizMarc_resultMarc()
{
    return array(
        'title' => "Congratulations",
        'text' => "That was a {$feedback} performance!",
        'feedback_40' => "lousy",
        'feedback_60' => "mediocre",
        'feedback_60' => "super!!!",
        'imageURL' => "/src/images/bild.jpg"
    );
}
