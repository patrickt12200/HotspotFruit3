<?php
    // Will check Database avalability.

    //require_once('database.php');
    /*$FillTable = "SELECT * FROM students";   
    $Fulltable = $db->query($FillTable);
    $id1 = $_POST['IDRange1'];
    $id2 = $_POST['IDRange2'];*/

    include('Taskbar.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
<h1 class="popularHead">Popular</h1>
<p class="description">Our Most Bestest Fruits!</p>
<p class="description">Give us your money, today!</p>
<div class="row">
        <div class="column">
            <div class="card">
             <img src="images/banana.jpg" class="column_img">
                <div class="container">
             <h2 class="title">American Banana</h2>
             <p class="description">An American Favorite. If you hate it, you're not normal</p>
                    <p class="price">$2.99/lb</p>
                    <p><button class="button">Add to Cart</button> </p>
        </div>

    </div>
        </div>


<div class="column">
    <div class="card">
        <img src="images/honeycrisp.jpg" class="column_img">
            <div class="container">
            <h2 class="title">Honey Crisp Apple</h2>
            <p class="description">Literally the best apple ever bro.</p>
                <p class="price">$2.99/lb</p>
                <p><button class="button">Add to Cart</button> </p>
            </div>
    </div>

</div>
</div>

<div class="row">
    <div class="column">
        <div class="card">
            <img src="images/dragonfruit.jpg" class="column_img">
                 <div class="container">
                     <h2 class="title">Dragon Fruit</h2>
                     <p class="description">Honestly, idek why people like these</p>
                     <p class="price">$5.99/lb</p>
                     <p><button class="button">Add to Cart</button></p>
                 </div>
        </div>
    </div>
</div>
<div class="column"
</div>


    
</body>
</html>