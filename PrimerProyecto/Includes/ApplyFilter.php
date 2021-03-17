<?php

function applyFilter($conex, $logged, $filter)
{
    $consult = "SELECT * FROM news WHERE user_id = '$logged' AND category = '$filter' ORDER BY date DESC";
    $new = mysqli_query($conex, $consult);
    return $new;
}
