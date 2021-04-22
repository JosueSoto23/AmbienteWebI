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
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Style/Style.css" media="all">

    <title> My News Cover </title>

</head>

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
        <h1><a href="<?php echo site_url('controller/Index'); ?>"><img src="<?= base_url() ?>Images/logo.png"></a></h1>
        <button type="button" class="btn btn-dark"> <img class="icon" src="<?= base_url() ?>Images/user_50px.png" alt="x" /> <?php echo "Admin" ?> <br> <?php foreach($x as $y) { echo $y['name']; } ?> </button>
        <button type="button" class="btn btn-light" onclick="location.href='<?php echo site_url('controller/Index'); ?>'"> Logout </button>
        <button type="button" class="btn btn-light" onclick="location.href=''"> Categories </button>
        <h3 class="title"> Categories </h3>
        <hr class="hr-title">
    </header>

    <div class="container">

        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th id="1">Category</th>
                    <th id="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = $this->Category->get_categories();
                $data['query'] = $query;

                foreach ($query as $row) { ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td>
                            <a href="<?php echo site_url(['controller', 'edit', $row['id']]); ?>">
                                <button type='button' class='btn btn-success'> Edit </button> </a>
                            <a href="<?php echo site_url(['controller', 'category_delete', $row['id']]); ?>">
                                <button type='button' class='btn btn-danger'> Delete </button> </a>
                        </td>
                    </tr>
            </tbody>
        <?php
                }
        ?>
        </table>

        <button onclick="location.href='<?php echo site_url('controller/add'); ?>'" name="open-add-categories" class="btn btn-primary"> Add New </button><br>
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