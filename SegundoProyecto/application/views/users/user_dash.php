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
    <h1><a href="<?php echo site_url('controller/index')?>"><img src="<?= base_url() ?>Images/logo.png" alt=""></a></h1>
    <button type="button" class="btn btn-dark"> <img class="icon" src="<?= base_url() ?>Images/user_50px.png" alt="" /> <?php echo "User"; ?> <br> <?php ?> </button>
    <button type="button" class="btn btn-light" onclick="location.href='<?php echo site_url('controller/index'); ?>'"> Logout </button>
    <button type="button" class="btn btn-light" onclick="location.href=''"> News Sources </button>
    <h1 class="text-center"> Your unique News Cover </h1>
    <hr>
  </header>

  <div class="container">
    <div class="btn-group" role="group" aria-label="Basic outlined example">
      <button type="button" class="btn btn-outline-primary" href="Script.js" onclick="applyFilter($conex, $logged, 'Deportes');"> Portada </button>
      <?php
      //foreach ($category as $row) {
      ?>
        <div>
          <a href="<?php// applyFilter($conex, $logged, $row['name']) ?>">
            <button type='button' class='btn btn-outline-primary'> <?php// echo $row['name'] ?> </button> </a>
        </div>
      <?php
      //}
      ?>

    </div><br><br><br>

    <script>
      document.getElementById("demo").onclick = function() {
        myFunction()
      };

      function myFunction() {
        document.getElementById("demo").innerHTML = "<?php $filter ?>";
      }
    </script>

    <div class="card-deck">

      <?php
      //if ($news == null) {
      ?>
        <div class="extra" style="align-items:center; margin-left:36%;">
          <br>
          <button type="button" class="btn btn-extra" onclick="location.href='NewsSources.php'"> Click in here to add your News Sources </button>
        </div>
        <?php
      //} else {
        //foreach ($new as $row) {
        ?>
          <div class="" style="margin: 10px; margin-right : 40px;">
            <hr>
            <p style="text-align: left; "> <?php// echo ($row['date']); ?> </p>
            ​<picture>
              <source srcset="Images/image.png" type="image/svg+xml">
              <img src="Images/image.png" class="img-fluid img-thumbnail" alt="...">
            </picture>
            <h5 style="text-align: left;"> <b><?php// echo ($row['title']); ?></b> </h5>
            <h6 style="text-align: left;"> <?php// echo ($row['category']); ?></h6>
            <p style="text-align: left;"> <?php// echo ($row['short_decription']); ?> </p>
            <a href="<?php// echo $row['permalink']; ?>" style="text-align: left;"> Ver Noticia </a>
          </div>
      <?php
        //}
      //}
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