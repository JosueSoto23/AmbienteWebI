<?php

require "Includes/LoadCategories.php";

session_start();

?>

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
        <h1><a href="Includes/UserLogout.php"><img src="Images/logo.png"></a></h1>
        <button type="button" class="btn btn-dark"> <img class="icon" src="Images/user_50px.png" alt="x" /> <?php echo "Admin"; ?> </button>
        <button type="button" class="btn btn-light" onclick="location.href='Includes/UserLogout.php'"> Logout </button>
        <button type="button" class="btn btn-light" onclick="location.href='AdminDash.php'"> Categories </button>
        <h3 class="title"> Categories </h3>
        <hr class="hr-title">
    </header>

    <div class="container">

        <table class="table table-responsive table-bordered">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($query as $row) { ?>
                    <tr>
                        <td><?php echo ($row['name']); ?></td>
                        <td>
                            <a href="EditCategories.php?id=<?php echo $row['id'] ?>">
                                <button type='button' class='btn btn-success'> Edit </button> </a>
                            <a href="Includes/DeleteCategories.php?id=<?php echo $row['id'] ?>">
                                <button type='button' class='btn btn-danger'> Delete </button> </a>
                        </td>
                    </tr>
            </tbody>
        <?php
                }
        ?>
        </table>

        <button onclick="location.href='AddCategories.php'" name="open-add-categories" class="btn btn-primary"> Add New </button><br>
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