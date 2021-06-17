<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="build/css/style.css">
    <title>PHP Nature Quest</title>
</head>

<body>

    <header>
        <?php include "header.php"; ?>

    </header>



    <Navbar>
        <div class="topnav">
            <a class="active" href="http://localhost:3000/www/public/About.php%22%3EAbout">hallo</a>
            <a class="active" href="http://localhost:3000/www/public/favfood.php%22%3EFavourite" >Food</a>
        </div>
    </Navbar>






    <h1>Welcome to my home page!</h1>
    <hr>
    <br>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab iusto,
        et alias saepe neque quibusdam nemo maxime facere numquam repellendus
        hic laudantium adipisci animi voluptas nesciunt harum vitae consequuntur in..</p>
    <br>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quo quidem
        iste qui ipsa explicabo eveniet minus, numquam accusantium laboriosam consectetur rem,
        ex pariatur tempora dignissimos necessitatibus doloremque facilis magnam!. Lorem ipsum
        dolor sit amet consectetur adipisicing elit. Ad, qui voluptatibus? Aspernatur laudantium
        nam odio rem ratione consequatur officia error architecto, quidem praesentium ipsa at dolor
        maiores cupiditate. Voluptate, ex.</p>
    <br>





    <?php

    $age = array("Peter=>35", "Mike=>23", "Phil=>19");
    foreach ($age as $x => $x_value) {
        echo "key=" . $x . "Value=" . $x_value;
        echo "<br>";
    }

    ?>

    <br>
    <hr>
    <footer>
        <?php include "_footer.php"; ?>
    </footer>

</body>

</html>
