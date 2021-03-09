<?php

    $inc = include("Connection.php");

if ($inc) {
	$consult = "SELECT * FROM matricula";
	$result = mysqli_query($connex, $consult);
	if ($result) {
		while ($row = $result->fetch_array()) {
	    $id = $row['id'];
        $cedula = $row['cedula'];
	    $nombre = $row['nombre'];
	    $apellidos = $row['apellidos'];
        $correo = $row['correo'];
        $carrera = $row['carrera'];
        $fecha = $row['fecha'];
	    ?>
        <div id="registradas"><br>
        	<h2><?php echo $nombre, " ", $apellidos; ?></h2>
        	<div>
        		<p>
        			<b> Correo: </b> <?php echo $correo ?> <br>
        		    <b> Carrera: </b> <?php echo $carrera ?> <br>
					
        		</p>
        	</div>
        </div> 
		<?php
	    }
	}
}
?>