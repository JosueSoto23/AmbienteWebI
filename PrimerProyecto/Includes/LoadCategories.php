<?php

Include "Connection.php";

$conex = getConnection();
$consult = "SELECT * FROM categories";
$query = mysqli_query($conex, $consult);
$array = mysqli_fetch_array($query);
