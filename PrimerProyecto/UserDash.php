<?php

include "Includes/UserLogin.php";

session_start();
$usuario = $_SESSION['name'];
$logged = $_SESSION['id'];

if ($usuario == null) {
    header("Location: Index.php");
}

$conex = getConnection();
$consult = "SELECT * FROM categories";
$category = mysqli_query($conex, $consult);
$categories = mysqli_fetch_array($category);

$conex2 = getConnection();
$consult2 = "SELECT * FROM news WHERE user_id = '$logged' ";
$new = mysqli_query($conex2, $consult2);
$news = mysqli_fetch_array($new);


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="Style/Style.css">

    <title> My News Cover </title>

</head>

<body>

    <header>
        <h1><a href="Includes/UserLogout.php"><img src="Images/logo.png"></a></h1>
        <button type="button" class="btn btn-dark"> <img class="icon" src="Images/user_50px.png" alt="x" /> <?php echo "User" ?> <br> <?php echo $usuario; ?> </button>
        <button type="button" class="btn btn-light" onclick="location.href='Includes/UserLogout.php'"> Logout </button>
        <button type="button" class="btn btn-light" onclick="location.href='NewsSources.php'"> News Sources </button>
        <h1 class="text-center"> Your unique News Cover </h1>
        <hr>
    </header>

    <div class="container">
        <div class="card-deck">

            <div class="card" style="width: 16rem;">
                <ul class="list-group list-group-flush">
                    <li style="text-align: center;" class="list-group-item"> Portada </li>
                </ul>
            </div>
            <?php
            foreach ($category as $row) {
            ?>
                <div class="card" style="width: 16rem;">
                    <ul class="list-group list-group-flush">
                        <li style="text-align: center;" class="list-group-item"> <?php echo $row['name'] ?> </li>
                    </ul>
                </div>
            <?php
            }
            ?>

        </div><br>

        <div class="card-deck">

            <?php
            foreach ($new as $row) {
            ?>
                <div class="" style="margin: 10px; margin-right : 40px;">
                    <p style="text-align: left; "> <?php echo ($row['date']); ?> </p>
                    ​<picture>
                        <source srcset="Images/image.png" type="image/svg+xml">
                        <img src="Images/image.png" class="img-fluid img-thumbnail" alt="...">
                    </picture>
                    <h5 style="text-align: left;"> <?php echo ($row['title']); ?> </h5>
                    <h6 style="text-align: left;"> <?php echo ($row['category']); ?></h6>
                    <p style="text-align: left;"> <?php echo ($row['short_decription']); ?> </p>
                    <a href="<?php echo $row['permalink']; ?>" style="text-align: left;"> Ver Noticia </a>
                </div>
            <?php
            }
            ?>
        </div>

        <footer>
            <div class="footer">
                <hr>
                <h4> <a href="">My Cover</a> | <a href="">About</a> | <a href="">Help</a></h4>
                <p>&copy; My News Cover</p>
            </div>
        </footer>
    </div>

</body>

</html>