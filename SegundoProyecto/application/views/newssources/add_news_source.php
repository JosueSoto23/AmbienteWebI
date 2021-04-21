<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
        <h1><a href="<?php echo site_url('controller/index') ?>"><img src="<?= base_url() ?>Images/logo.png" alt=""></a></h1>
        <button type="button" class="btn btn-dark"> <img class="icon" src="<?= base_url() ?>Images/user_50px.png" alt="" /> <?php echo "User"; ?> <br> <?php ?> </button>
        <button type="button" class="btn btn-light" onclick="location.href='<?php echo site_url('controller/index'); ?>'"> Logout </button>
        <button type="button" class="btn btn-light" onclick="location.href='<?php echo site_url('controller/news_source'); ?>'"> News Sources </button>
        <h3 class="title"> Add News Sources </h3>
        <hr class="hr-title">
    </header>

    <div class="container">
        <form action="<?php echo site_url('controller/news_source_registration') ?>" method="POST" >

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"> Name </span>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"> RSS URL </span>
                <input type="text" name="rss" class="form-control">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01"> Category </label>
                <select class="form-control" name="category" id="inputGroupSelect01">
                    <?php
                    $query = $this->Category->get_categories();
                    $data['query'] = $query;
                    ?>
                    <?php foreach ($query as $row) { ?>
                        <option value="<?php echo $row['name']; ?>"> <?php echo $row['name']; ?> </option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <button type="submit" name="edit-sources" value="Ingresar" class="btn btn-primary"> Save </button><br>

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