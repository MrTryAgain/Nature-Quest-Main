<?php 
    session_start();

    $_SESSION['questions'] = [
        ["Wildfires spreas in areas that are?","Dry"],
        ["What causes Tsunami?","Earthquake on the sea floor"],
        ["Earthquakes take place where?","tectonic plates meets"],
        ["Which natural disaster is a violent rotating column of air extending from a thunderstorm to the ground?","Tornado"],
        ["Which natural disaster is prologed period of abnormally low rainfall: a shortage of water resulting from this?","Drought"],
        ["Hurricanes rotate in which direction?","Counter-clockwise"],
        ["The strongest earthquake ever recorded measured a 9.5 on the Richter scale and
        took place in which country?","Chile"],
        ["What should you do if you are stuck out doors during a tornado?","Both A and B"],
        ["If you were skiing in Chamonix and you sneezed, what could you possibly cause?","An avalanche"],
        ["Is it possible for lightinging to strike the same place twice?","YES"],
        ["Name the Natural disaster that is considered the most violent?","Tornado"]
    ];
    
    $_SESSION['answers'] = [
        ["Wet", "Dry","Cold","Snowy"],
        ["Earthquake on Land.", "Hurricanes","High winds","Earthquakes on the sea floor."],
        ["Water meetsland.", "Middle schoolers dance.","Tectonic plates meet.","There is a lot of snow."],
        ["Drought", "Tornado","Earthquake","Hurricane."],
        ["Flood", "Drought","Blizzard","Hurricane"],
        ["Counter-clockwise", "Vertical","Clockwise","Hurricanes don't rotate."],
        ["Albania", "Ukraine","Chile","Monaco"],
        ["Lie flat in a ditch or ravine.", "Lie face down and cover your head with yout hands.","Both A and B","None of the above"],
        ["An avalanche.", "A mudslide.","A tidal wave.","None of the above."],
        ["Yes", "No","Only if it happens to two different people.","Only if the lightining strikes on a leap year."],
        ["Flood", "Rainbow","Volcano","Tornado"],
    ];

    $_SESSION['inputs'] = [];

    if(!isset($_SESSION['quiz_counter'])){
        $_SESSION['quiz_counter'] = 0;
        $_SESSION['score'] = 0;
    }
    $counter = $_SESSION['quiz_counter'];
    

?>

<?php require_once "include/header.php"?>
<link rel="stylesheet" href="./../build/css/style.css">
<!-- <link rel="stylesheet" href="./../build/css/j_style.css"> -->

<div class="container">
    <form action="result_Jaqueline.php" method="POST">
      
        <h1><?php echo $_SESSION['questions'][$counter][0] ;?></h1>  
        <input type="radio" name="a" id="a1" value="<?php echo $_SESSION['answers'][$counter][0]; ?>">
        <label for="a1"><?php echo $_SESSION['answers'][$counter][0]; ?></label><br>
        <input type="radio" name="a" id="a2" value="<?php echo $_SESSION['answers'][$counter][1];?>">
        <label for="a2"><?php echo $_SESSION['answers'][$counter][1] ;?></label> <br>
        <input type="radio" name="a" id="a3" value="<?php echo $_SESSION['answers'][$counter][2];?>">
        <label for="a3"><?php echo $_SESSION['answers'][$counter][2] ;?></label> <br>
        <input type="radio" name="a" id="a4" value="<?php echo $_SESSION['answers'][$counter][3];?>">
        <label for="a4"><?php echo $_SESSION['answers'][$counter][3] ;?></label> <br>  
    <br><br>
    <button>Send</button>
    </form>
</div>
<?php require_once "include/footer.php"?>

