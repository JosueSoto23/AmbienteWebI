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
        }
    }
}

function fillList($list) {
    for ($i = 1; $i <= count($list, COUNT_NORMAL); $i++) {
        ?>
        <option value="<?php echo $list[$i - 1]; ?>"> <?php echo $list[$i - 1]; ?> </option>
        <?php
    }
}
