<?php
defined('BASEPATH') or exit('No direct script access allowed');
$x = $_SESSION['users'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Style/Style.css">

    <title> My News Cover </title>

</head>

<body>

    <header>
        <h1><a href="Includes/UserLogout.php"><img src="<?= base_url() ?>Images/logo.png" alt=""></a></h1>
        <button type="button" class="btn btn-dark"> <img class="icon" src="<?= base_url() ?>Images/user_50px.png" alt="x" /> <?php echo "Admin"; ?> <br> <?php foreach ($x as $y) {
                                                                                                                                                                echo $y['name'];
                                                                                                                                                            } ?> </button>
        <button type="button" class="btn btn-light" onclick="location.href='<?php echo site_url('controller/index'); ?>'"> Logout </button>
        <button type="button" class="btn btn-light" onclick="location.href='<?php echo site_url('controller/admin_dash'); ?>'"> Categories </button>
        <h3 class="title"> Add Category </h3>
        <hr class="hr-title">
    </header>

    <div class="container">
        <form action="<?php echo site_url('controller/category_registration') ?>" method="POST">

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"> Name </span>
                <input type="text" name="name" class="form-control">
            </div>
            <button type="submit" name="add-categories" value="Ingresar" class="btn btn-primary"> Save </button><br>

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