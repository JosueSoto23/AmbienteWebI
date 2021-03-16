<?php

include "Connection.php";

if (isset($_POST['login'])) {
  if (strlen($_POST['usuario'] >= 1) && strlen($_POST['contraseña'] >= 1)) {

    $usuario = trim($_POST['usuario']);
    $contraseña = md5($_POST['contraseña']);
    session_start();
    $_SESSION['usuario'] = $usuario;

    $conexion = mysqli_connect("localhost", "root", "", "primerproyecto");

    $consulta = "SELECT * FROM users where email = '$usuario' and pass = '$contraseña'";
    $resultado = mysqli_query($conexion, $consulta);

    $filas = mysqli_num_rows($resultado);
    $user = mysqli_fetch_array($resultado);


    if ($filas) {
      $_SESSION['id'] = $user[0];
      $_SESSION['name'] = $user[1];

      if ($user[4] === "Administrador") {
        header("location: AdminDash.php");
      } else {
        header("location: UserDash.php");
      }
    }
    if (!$filas) {

?>

      <div class="alert alert-danger" role="alert">
        Incorrect data!
      </div>

    <?php


      mysqli_free_result($resultado);
      mysqli_close($conexion);
    }
  } else {
    ?>
    <div class="alert alert-danger" role="alert">
      Required fields!
    </div>

<?php

  }
}

?>