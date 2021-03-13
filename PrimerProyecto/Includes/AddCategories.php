<?php

include "Connection.php";

if (isset($_POST['add-categories'])) {
    if (strlen($_POST['name'] >= 1)) {

        $name  = $_POST['name'];

        $consult = "INSERT INTO categories VALUES ('','$name') ";
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