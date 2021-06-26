<?php
session_start();
require_once "include/header.php";

foreach ($_POST as $key => $value) {
  array_push($_SESSION['inputs'], $value);
} ?>

<head>

  <meta charset=UTF-8" />

  <title>Nature Quest</title>

  <link rel="stylesheet" type="text/css" href="style.css" />


</head>

<body>

  <div id="quizBox">

    <br>

    <form action="resultMarc.php" method="post" id="quiz">

      <ul>

        <li>

          <h3>Which is the smallest mammal in the world?</h3>

          <div>
            <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
            <label for="question-7-answers-A">A) Kitti's Hog-nosed Bat </label>
          </div>

          <div>
            <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
            <label for="question-7-answers-B">B) Pigmy Jerboa</label>
          </div>

          <div>
            <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
            <label for="question-7-answers-C">C) Etruscan Shrew</label>
          </div>

          <div>
            <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />
            <label for="question-7-answers-D">D) African Pygmy Mouse</label>
          </div>

        </li>

        <br>

        <li>

          <h3>How many wings does a bumblebee have?</h3>

          <div>
            <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
            <label for="question-8-answers-A">A) Six</label>
          </div>

          <div>
            <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
            <label for="question-8-answers-B">B) Four</label>
          </div>

          <div>
            <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
            <label for="question-8-answers-C">C) Eight</label>
          </div>

          <div>
            <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
            <label for="question-8-answers-D">D) Two</label>
          </div>

        </li>

        <br>

        <li>

          <h3>Which are the highest located clouds?</h3>

          <div>
            <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
            <label for="question-9-answers-A">A) Cumulus</label>
          </div>

          <div>
            <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
            <label for="question-9-answers-B">B) Cirrus</label>
          </div>

          <div>
            <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />
            <label for="question-9-answers-C">C) Nimbus</label>
          </div>

          <div>
            <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />
            <label for="question-9-answers-D">D) Stratus</label>
          </div>

        </li>

      </ul>

      <br>

      <center>
        <input type="submit" value="Submit" class="submitBtn" />
      </center>

    </form>

  </div>

</body>

<?php require_once "include/footer.php" ?>