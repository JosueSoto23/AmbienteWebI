<?php
include "Connection.php";

deleteCategories($_GET['id']);

function deleteCategories($id)
{
    $conex = getConnection();
    $consult = "DELETE FROM categories WHERE id = '$id'";
    $query = mysqli_query($conex, $consult);
}

header("Location: ../AdminDash.php");

?>