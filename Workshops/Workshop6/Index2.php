<?php

include "Logica.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style.css">

    <title> Temperaturas </title>
</head>

<body>

    <header>
        <h1> Temperaturas </h1>
        <button onclick="location.href='Index.php'"> Capitales </button>
    </header>

    <br><br>
    <div>
        <?php
        recordedTemperatures($list);
        ?>
        <br>
        <?php
        averageTemperature($list);
        ?>
        <br>
        <?php
        listLowest($list);
        ?>
        <br>
        <?php
        listHighest($list);
        ?>
    </div>

</body>

</html>