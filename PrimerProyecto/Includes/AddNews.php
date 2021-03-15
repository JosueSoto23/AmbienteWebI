<?php

include "Connection.php";

$nombre  = $_POST['name'];
$url  = $_POST['url'];
$category  = $_POST['category'];

session_start();

$user = $_SESSION['user'];
$user_id = $user['id'];

$insertar = "INSERT INTO newssources VALUES ('','$url','$nombre','$category', '$user_id') ";

$conectar = getConnection();
$query = mysqli_query($conectar, $insertar);

if ($query) {
    $conns = getConnection();
    $cons = "SELECT id FROM newssources WHERE nameN = '$nombre' AND category_id = '$category'";
    $querys = mysqli_query($conns, $cons);
    $arrays = mysqli_fetch_array($querys);
    $id_news = $arrays['id'];

    guardarXml($url, $category, $user_id, $id_news);
}
