<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="Style.css">

    <title> Workshop 3 </title>
</head>

<body>
    <div class="container">
        <form method="POST">
            <h1> Movie Register </h1>
            <br>
            <input type="text" name="name" placeholder="Movie name">
            <br>
            <input type="text" name="desc" placeholder="Description">
            <br><br>
            <input type="submit" name="register"><br><br>
            <a href="List.php"> Ver lista de peliculas </a>
            <br>
        </form>
    </div>
    

</body>

</html>

<?php

include "Register.php";

?>