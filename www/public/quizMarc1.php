<?php
session_start();
require_once "include/header.php";

$_SESSION["inputs"] = [];
?>

<head>

  <meta charset=UTF-8" />

  <title>Nature Quest</title>

  <link rel="stylesheet" type="text/css" href="style.css" />


</head>

<body>

  <div id="quizBox">


    <br>


    <form action="quizMarc2.php" method="post" id="quiz">

      <ul>

        <li>

          <h3>How tall is Mount Everest?</h3>

          <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
            <label for="question-1-answers-A">A) 8,289 meters </label>
          </div>

          <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
            <label for="question-1-answers-B">B) 8,642 meters</label>
          </div>

          <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
            <label for="question-1-answers-C">C) 8,849 meters</label>
          </div>

          <div>
            <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
            <label for="question-1-answers-D">D) 8,927 meters</label>
          </div>

        </li>

        <br>

        <li>

          <h3>Which rivers merge to form the Nile?</h3>

          <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
            <label for="question-2-answers-A">A) White Nile, Yellow Nile, Bishri</label>
          </div>

          <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
            <label for="question-2-answers-B">B) Blue Nile, Atbara, Yellow Nile</label>
          </div>

          <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
            <label for="question-2-answers-C">C) Brown Nile, Bishri, Kamora</label>
          </div>

          <div>
            <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
            <label for="question-2-answers-D">D) Atbara, White Nile, Blue Nile</label>
          </div>

        </li>

        <br>

        <li>

          <h3>Where is the lowest point on land?</h3>

          <div>
            <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
            <label for="question-3-answers-A">A) Denman Glacier</label>
          </div>

          <div>
            <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
            <label for="question-3-answers-B">B) Dead Sea</label>
          </div>

          <div>
            <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
            <label for="question-3-answers-C">C) Lake Assal</label>
          </div>
          <div>
            <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
            <label for="question-3-answers-D">D) Laguna del Carbon</label>
          </div>

        </li>

      </ul>

      <br>

      <center>

        <button class="nextPage" href="quizMarc2.php">Continue</button>
      </center>


    </form>

  </div>


</body>

</html>


<?php require_once "include/footer.php" ?>