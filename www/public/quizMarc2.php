<?php
session_start();

require_once "include/header.php";

foreach ($_POST as $key => $value) {
  array_push($_SESSION['inputs'], $value);
}
?>

<head>

  <meta charset=UTF-8" />

  <title>Nature Quest</title>

  <link rel="stylesheet" type="text/css" href="style.css" />


</head>

<body>

  <div id="quizBox">


    <br>

    <form action="quizMarc3.php" method="post" id="quiz">

      <ul>

        <li>

          <h3>How high are the tallest specimen of trees, the Sequoia Sempervirens, on average?</h3>

          <div>
            <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
            <label for="question-4-answers-A">A) 70 meters</label>
          </div>

          <div>
            <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
            <label for="question-4-answers-B">B) 110 meters</label>
          </div>

          <div>
            <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
            <label for="question-4-answers-C">C) 90 meters</label>
          </div>

          <div>
            <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
            <label for="question-4-answers-D">D) 60 meters</label>
          </div>

        </li>

        <br>

        <li>

          <h3>Which country borders the largest lake on Earth?</h3>

          <div>
            <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
            <label for="question-5-answers-A">A) Canada</label>
          </div>

          <div>
            <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
            <label for="question-5-answers-B">B) Kazakhstan</label>
          </div>

          <div>
            <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
            <label for="question-5-answers-C">C) Uganda</label>
          </div>

          <div>
            <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
            <label for="question-5-answers-D">D) United States</label>
          </div>

        </li>

        <br>

        <li>

          <h3>How do we call the process by which plants convert sunlight into nutrition?</h3>

          <div>
            <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
            <label for="question-6-answers-A">A) Photomorphogenesis</label>
          </div>

          <div>
            <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
            <label for="question-6-answers-B">B) Tropism</label>
          </div>

          <div>
            <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
            <label for="question-6-answers-C">C) Photoperiodism</label>
          </div>

          <div>
            <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
            <label for="question-6-answers-D">D) Photosynthesis</label>
          </div>

        </li>


      </ul>
      <br>

      <center>
        <button class="nextPage" href="quizMarc3.php">Continue</button>
      </center>

    </form>

  </div>
</body>






<?php require_once "include/footer.php" ?>