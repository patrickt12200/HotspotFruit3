<?php
// Will check Database avalability

require_once('database.php');
require_once('Functions.php');
//session_start();
// if(!$_SESSION['loggedIn'])header("Location:Login.php");
$sql_fruits = sql_fruits($db);
include('Taskbar.php') ?>
<br>



<!DOCTYPE html>
<html lang="en">
<head class='menu'>

    <link rel="stylesheet" href="styles/styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id='allOurFruit'>
    <?php UserLookup($sql_fruits);?>
</div>

<span>
</body>
</html>
