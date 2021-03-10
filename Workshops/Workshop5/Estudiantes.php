<?php

    include "Auth.php"

?>

<!DOCTYPE html>
<html>

<head>
    <title> Matrículas </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="Style/Style.css">
</head>

<body>

    <header>
        <div>
            <h2> Estudiantes </h2>
        </div>
    </header>

    <div id="registradas"><br>
        	<h2><?php echo $cedula; ?></h2>
        	<div>
        		<p>
        			<b> Nombre: </b> <?php echo $nombre ?> <br>
        		</p>
        	</div>
        </div> 

</body>

</html>