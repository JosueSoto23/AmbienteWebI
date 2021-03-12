<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style/Style.css">

    <title> User Register </title>

</head>

<body>

    <header>

        <h3 class="title"> Registro de Usuario </h3>

    </header>

    <form method="POST">

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> Nombre </span>
            <input type="text" name="name" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> Correo </span>
            <input type="email" name="email" class="form-control" aria-label="Email" aria-describedby="basic-addon1">
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01"> Role </label>
            <select class="form-control" name="role" id="inputGroupSelect01">
                <option value="Administrador"> Administrador </option>
                <option value="Usuario"> Usuario </option>
            </select>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> Contraseña </span>
            <input type="password" name="pass" class="form-control" aria-label="Password" aria-describedby="basic-addon1">
        </div>

        <button type="submit" name="register" class="btn btn-primary"> Registrar </button>

    </form>

</body>

</html>

<?php

include "Includes/UserRegistration.php";

?>