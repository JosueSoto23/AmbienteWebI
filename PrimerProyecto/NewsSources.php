<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style/Style.css">

    <title> News Sources </title>
</head>

<body>

    <header>
        <h1><a href="Includes/UserLogout.php"><img src="Images/logo.png"></a></h1>
        <button type="button" class="btn btn-dark"> <img class="icon" src="Images/user_50px.png" alt="x" /> <?php echo "Josué Soto"; ?> </button>
        <button type="button" class="btn btn-light" onclick="location.href='Includes/UserLogout.php'"> Logout </button>
        <button type="button" class="btn btn-light" onclick="location.href='UserDash.php'"> Dashboard </button>
        <h3 class="title"> News Sources </h3>
        <hr class="hr-title">
    </header>

    <div>


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