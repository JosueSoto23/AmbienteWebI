<?php

$inc = include "Connection.php";
$nombres = array();
$cedulas =array();
$contras =array();
$roles =array();



    if ($inc) {
        $consult = "SELECT * FROM usuario";
        $result = mysqli_query($connex, $consult);
        if ($result) {
            while ($row = $result->fetch_array()) {
            $id = $row['id'];
            $nombre = $row['nombre'];
            $cedula = $row['cedula'];
            $contra = $row['contra'];
            $rol = $row['rol'];

            array_push($nombres, $nombre);
            array_push($cedulas, $cedula);
            array_push($contras, $contra);
            array_push($roles, $rol);
        }
    }
}

function authenticate($cedula, $contra, $nombres, $cedulas, $contras) {
    for ($i = 1; $i <= count($nombres, COUNT_NORMAL); $i++) {
        if($cedula === $cedulas[$i-1] && $contra === $contras[$i-1]){
            echo $nombres[0], " ";
            ?>
                <br><br>
            <?php
        } else {
            echo "nothing";            
        }
    }
}

?>