<?php

if (isset($_POST['edit-sources'])) {
    if (strlen($_POST['name'] >= 1) && strlen($_POST['rss'] >= 1) && strlen($_POST['categories'] >= 1)) {

        $id = $_GET['id'];
        $name  = $_POST['name'];
        $rss = $_POST['rss'];
        $categories = $_POST['categories'];

        $invalidurl = false;
        if (@simplexml_load_file($rss)) {
            $news = simplexml_load_file($rss);

            $consult = " UPDATE `newssources` SET `name` = '$name', `rss` = '$rss', `category` = '$categories' WHERE `newssources`.`id` = '$id' ";
            $connect = getConnection();
            $result = mysqli_query($connect, $consult);

            if ($result) {
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
            }
        } else {
            $invalidurl = true;
            ?>
            <div class="alert alert-danger" role="alert">
                Invalid RSS!
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