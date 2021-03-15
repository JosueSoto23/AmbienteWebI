<?php
include "Connection.php";

deleteSources($_GET['id']);
deleteNews($_GET['id']);

function deleteSources($id)
{
    $conex = getConnection();
    $consult = "DELETE FROM newssources WHERE id = '$id'";
    $query = mysqli_query($conex, $consult);
}

function deleteNews($id)
{
    $conex = getConnection();
    $consult = "DELETE FROM news WHERE news_source_id = '$id'";
    $query = mysqli_query($conex, $consult);

}

header("Location: ../NewsSources.php");

?>