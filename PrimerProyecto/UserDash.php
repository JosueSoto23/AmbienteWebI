<?php

require 'Includes/UserLogin.php';

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
        <button type="button" class="btn btn-dark"> <img class="icon" src="Images/user_50px.png" alt="x" /> <?php echo "Josué Soto"; ?> </button>
        <button type="button" class="btn btn-light" onclick="location.href='Includes/UserLogout.php'"> Logout </button>
        <button type="button" class="btn btn-light" onclick="location.href='NewsSources.php'"> News Sources </button>
        <h1 class="text-center"> Your unique News Cover </h1>
        <hr>
    </header>

    <div class="container pt-3">

        <div class="card-deck">
            <div class="card" style="width: 16rem;">
                <ul class="list-group list-group-flush">
                    <li style="text-align: center;" class="list-group-item">An item</li>
                </ul>
            </div>
            <div class="card" style="width: 16rem;">
                <ul class="list-group list-group-flush">
                    <li style="text-align: center;" class="list-group-item">An item</li>
                </ul>
            </div>
            <div class="card" style="width: 16rem;">
                <ul class="list-group list-group-flush">
                    <li style="text-align: center;" class="list-group-item">An item</li>
                </ul>
            </div>
            <div class="card" style="width: 16rem;">
                <ul class="list-group list-group-flush">
                    <li style="text-align: center;" class="list-group-item">An item</li>
                </ul>
            </div>
            <div class="card" style="width: 16rem;">
                <ul class="list-group list-group-flush">
                    <li style="text-align: center;" class="list-group-item">An item</li>
                </ul>
            </div>
            <div class="card" style="width: 16rem;">
                <ul class="list-group list-group-flush">
                    <li style="text-align: center;" class="list-group-item">An item</li>
                </ul>
            </div>
            <div class="card" style="width: 16rem;">
                <ul style="text-align: center;" class="list-group list-group-flush">
                    <li class="list-group-item">An item</li>
                </ul>
            </div>
        </div>
        <br><br>

        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">FECHA</p>
                </div>
                <img class="card-img-top" src="img/logo.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Titulo de la noticia</h5>
                    <h6 class="card-title">Categoria</h6>
                    <p class="card-text">Descripción corta de la noticia.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link">Ver Noticia</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">FECHA</p>
                </div>
                <img class="card-img-top" src="img/logo.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Titulo de la noticia</h5>
                    <h6 class="card-title">Categoria</h6>
                    <p class="card-text">Descripción corta de la noticia.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link">Ver Noticia</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">FECHA</p>
                </div>
                <img class="card-img-top" src="img/logo.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Titulo de la noticia</h5>
                    <h6 class="card-title">Categoria</h6>
                    <p class="card-text">Descripción corta de la noticia.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link">Ver Noticia</a>
                </div>
            </div>
        </div>
        <br>
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <p class="card-text">FECHA</p>
                </div>
                <img class="card-img-top" src="img/logo.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Titulo de la noticia</h5>
                    <h6 class="card-title">Categoria</h6>
                    <p class="card-text">Descripción corta de la noticia.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link">Ver Noticia</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">FECHA</p>
                </div>
                <img class="card-img-top" src="img/logo.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Titulo de la noticia</h5>
                    <h6 class="card-title">Categoria</h6>
                    <p class="card-text">Descripción corta de la noticia.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link">Ver Noticia</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">FECHA</p>
                </div>
                <img class="card-img-top" src="img/logo.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Titulo de la noticia</h5>
                    <h6 class="card-title">Categoria</h6>
                    <p class="card-text">Descripción corta de la noticia.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link">Ver Noticia</a>
                </div>
            </div>

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