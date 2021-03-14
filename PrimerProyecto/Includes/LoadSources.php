<?php

Include "Connection.php";

session_start();
$usuario_id = $_SESSION['id'];

$conex = getConnection();
$consult = "SELECT * FROM newssources WHERE user_id = '$usuario_id' ";
$query = mysqli_query($conex, $consult);
$array = mysqli_fetch_array($query);