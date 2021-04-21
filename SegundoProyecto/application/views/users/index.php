<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Style/Style.css" media="all">

  <title> My News Cover </title>

</head>

<body>

  <header>
    <h1><a href="<?php echo site_url('controller/Index'); ?>"><img src="<?= base_url() ?>Images/logo.png" alt=""></a></h1>
  </header>

  <h3 class="title"> User Login </h3>
  <hr class="hr-title"><br>

  <div class="container">
    <form action="<?php echo site_url('controller/login') ?>" method="POST">

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"> Email </span>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"> Password </span>
        <input type="password" name="pass" class="form-control">
      </div>
      <br>
      <button type="submit" name="login" value="Ingresar" class="btn btn-primary"> Login </button><br>
      <a href="<?php echo site_url('controller/users'); ?>"> Sign Up </a>

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