<?php
include('Connection.php');
$usuario = $_POST['usuario'];
$contraseña = md5($_POST['contraseña']);
session_start();
$_SESSION['usuario'] = $usuario;


$conexion = mysqli_connect("localhost", "root", "", "primerproyecto");

$consulta = "SELECT * FROM users where email = '$usuario' and pass = '$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if ($filas) {

  //header("location:home.php");
  echo "ADIOS";
} else {
?>
  <?php
  //include("index.html");
  echo "HOLAS";

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
<?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);
