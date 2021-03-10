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

if (isset($_POST['auth'])) {
    if (strlen($_POST['cedula']) >= 1 && strlen($_POST['contra']) >= 1) {
            for ($i = 1; $i <= count($nombres, COUNT_NORMAL); $i++) {
                    if($roles[$i-1] === "estudiante") {
                        header("Location:Estudiantes.php");
                    }
                    if($roles[$i-1] === "administrador") {
                        header("Location:RegistroMatriculas.php");
                    }
                }
            }
        }
    }

function logueado($nombres) {
    for ($i = 1; $i <= count($nombres, COUNT_NORMAL); $i++) {
         if($_POST['cedula'] === $cedulas[$i-1] && $_POST['contra'] === $contras[$i-1]){
         }
    }
}

?>