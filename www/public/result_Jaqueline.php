<?php
    session_start();

    if (!isset($_POST['a'])) {
        header('Location:quiz.php');
    } else {
        array_push($_SESSION['inputs'], $_POST['a']);
            if ($_POST['a']==$_SESSION['questions'][$_SESSION['quiz_counter']][1])    {
                $_SESSION['score']++;   
            }
        $_SESSION['quiz_counter']++;

    if($_SESSION['quiz_counter'] == count ($_SESSION['questions'])){

        require_once "include/header.php";

        echo"HERE IS YOUR RESULT<br>"; /// HERE YOU ADD A VALITAION =)
        echo $_SESSION['score'] . "<br>";
        echo count($_SESSION['questions']);


        require_once "include/footer.php";
        
        session_destroy();
    } else {
        header('Location: quiz.php');
    }   
}
