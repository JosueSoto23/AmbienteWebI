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

    <form action="Includes/UserRegistration.php" method="POST" class="form-group row" role="form">

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1"> Nombre </span>
            <input type="text" name="name" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Correo Electrónico </label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01"> Role </label>
            <select class="form-select" name="role" id="inputGroupSelect01">
                <option value="Administrador"> Administrador </option>
                <option value="Usuario"> Usuario </option>
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> Contraseña </label>
            <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary"> Registrar </button>

    </form>

</body>

</html>