<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style/Style.css">

    <title> My News Cover </title>

</head>

<body>

    <header>
        <h1><a href="Index.php"><img src="Images/logo.png"></a></h1>
    </header>

    <h3 class="title"> User Registration </h3>
    <hr class="hr-title"><br>

    <div class="container">
        <form method="POST">

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"> Name </span>
                <input type="text" name="name" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"> Email </span>
                <input type="email" name="email" class="form-control" aria-label="Email" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01"> Role </label>
                <select class="form-control" name="role" id="inputGroupSelect01">
                    <option value="Usuario"> User </option>
                    <option value="Administrador"> Admin </option>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"> Password </span>
                <input type="password" name="pass" class="form-control" aria-label="Password" aria-describedby="basic-addon1">
            </div>

            <br>
            <button type="submit" name="register" class="btn btn-primary"> Sign Up </button>

        </form>
    </div>

</body>

<?php

include "Includes/UserRegistration.php";

?>

<footer>
    <div class="footer">
        <hr>
        <h4> <a href="">My Cover</a> | <a href="">About</a> | <a href="">Help</a></h4>
        <p>&copy; My News Cover</p>
    </div>
</footer>

</html>