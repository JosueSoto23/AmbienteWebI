<?php

$usuario_id = $_SESSION['id'];

if (isset($_POST['add-sources'])) {
    if (strlen($_POST['name'] >= 1) && strlen($_POST['rss'] >= 1) && strlen($_POST['categories'] >= 1)) {

        $name = $_POST['name'];
        $rss = $_POST['rss'];
        $categories = $_POST['categories'];

        $consult = "INSERT INTO newssources VALUES ('', '$name', '$rss', '$categories', '$usuario_id') ";
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