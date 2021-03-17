<?php

function applyFilter($conex, $logged, $filter)
{
    if ($filter == "Portada") {
        $consult = "SELECT * FROM news WHERE user_id = '$logged' ORDER BY date DESC";
        $new = mysqli_query($conex, $consult);
        return $new;
    } else {
        $consult = "SELECT * FROM news WHERE user_id = '$logged' AND category = '$filter' ORDER BY date DESC";
        $new = mysqli_query($conex, $consult);
        return $new;
    }
}
