<?php

    include "Connection_db.php";

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $consult = "DELETE FROM movie WHERE id = $id";

        $result = mysqli_query($conex, $consult);
        if(!$result) {
            die("No se pudo eliminar");
        }

        header("Location: Index.php");
    }

?>