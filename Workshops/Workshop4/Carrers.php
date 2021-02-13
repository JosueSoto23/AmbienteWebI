<?php

    $inc = include "Connection.php";
    $list = array();

    if ($inc) {
        $consult = "SELECT * FROM carrera";
        $result = mysqli_query($connex, $consult);
        if ($result) {
            while ($row = $result->fetch_array()) {
            $id = $row['id'];
            $codigo = $row['codigo'];
            $nombre = $row['nombre'];
            array_push($list, $nombre);
            echo $nombre;
            ?> 
            
            <?php

        }
    }
}

?>