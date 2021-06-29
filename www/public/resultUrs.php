<?php require_once "include/header.php" ?>




<div class="Resultate">
<br>   
<h1>Dein Ergebnis</h1>
<br>
 <?php
     
     $answer1 = $_POST['question-1-answers'];
     $answer2 = $_POST['question-2-answers'];
     $answer3 = $_POST['question-3-answers'];
     $answer4 = $_POST['question-4-answers'];
     $answer5 = $_POST['question-5-answers'];
 
     $totalCorrect = 0;
     
     if ($answer1 == "B") { $totalCorrect++; }
     if ($answer2 == "C") { $totalCorrect++; }
     if ($answer3 == "C") { $totalCorrect++; }
     if ($answer4 == "A") { $totalCorrect++; }
     if ($answer5 == "A") { $totalCorrect++; }
     
     echo "<div id='result'>$totalCorrect / 5 Fragen richtig</div>";
     
 ?>

</div>
<br>



<?php require_once "include/footer.php" ?>