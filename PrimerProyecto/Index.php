<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="Style/Style.css">

  <title> Primer Proyecto </title>

</head>

<body>

  <header>
    <h3 class="title"> Inicio de Sesión </h3>
  </header>

  <div class="container">
    <form action="Includes/UserLogin.php" method="post">

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"> Correo </span>
        <input type="email" name="usuario" class="form-control">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"> Contraseña </span>
        <input type="password" name="contraseña" class="form-control">
      </div>
      <br>
      <button type="submit" value="Ingresar" class="btn btn-primary"> Ingresar </button><br>
      <a href="UserRegister.php"> Registrarse </a>

    </form>
  </div>

  <footer>
    <div class="footer">
      <hr>
      <h4> <a href="">My Cover</a> | <a href="">About</a> | <a href="">Help</a></h4>
      <p>&copy; My News Cover</p>
    </div>
  </footer>

</body>

</html>