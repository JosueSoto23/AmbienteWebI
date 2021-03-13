<?php

include "Connection.php";

if (isset($_POST['edit-categories'])) {
    if (strlen($_POST['name'] >= 1)) {

        $id = $_GET['id'];
        $name  = $_POST['name'];

        $consult = " UPDATE `categories` SET `name` = '$name' WHERE `categories`.`id` = $id ";
        $connect = getConnection();
        $result = mysqli_query($connect, $consult);

        if ($result) {

?>

            <div class="alert alert-success" role="alert">
                Successfully Registered!
            </div>

        <?php

        } else {

        ?>

            <div class="alert alert-danger" role="alert">
                Registration failed!
            </div>

        <?php

        }
    } else {

        ?>
        <div class="alert alert-danger" role="alert">
            Required fields!
        </div>

<?php

    }
}

?>