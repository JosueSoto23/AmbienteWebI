<?php

include "Connection.php";

$email = $_POST['email'];
$pass = $_POST['pass'];
session_start();
$_SESSION['user'] = $user;


$conex = mysqli_connect("localhost", "root", "", "primerproyecto");

$consult = "SELECT * FROM users where email = '$email' and pass = '$pass'";
$result = mysqli_query($conex, $consult);

$filas = mysqli_num_rows($result);

if ($filas) {

  //header("location:home.php");
  echo "ADIOS";

} else {
?>
  <?php
  //include("index.html");
  echo "HOLA";

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
<?php
}

mysqli_free_result($result);
mysqli_close($conex);
