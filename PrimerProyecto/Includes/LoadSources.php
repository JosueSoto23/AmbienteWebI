<?php

Include "Connection.php";

$conex = getConnection();
$consult = "SELECT * FROM newssources";
$query = mysqli_query($conex, $consult);
$array = mysqli_fetch_array($query);