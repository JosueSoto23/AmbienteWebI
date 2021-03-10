<?php

    $inc = include("Connection.php");
    include "Auth.php";

    for ($i = 1; $i <= count($nombres, COUNT_NORMAL); $i++) {
        if("208100649" === $cedulas[$i-1]){
            $cedula = $cedulas[$i-1];
            $nombre = $nombres[$i-1];
        }
    }
	?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="Style/Style.css">

    <title> Workshop 5 </title>

</head>

<body>    
    <header>
        <div>
            <h2> Estudiantes </h2>
        </div>
    </header>

    <div id="registradas"><br>
        <h2><?php echo $cedula ?></h2>
        <div>
            <p>
            	<b> Nombre: </b> <?php echo $nombre ?> <br>
        	</p>
        </div>
    </div> 
</body>

<?php
	
?>