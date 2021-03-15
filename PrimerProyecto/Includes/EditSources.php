<?php

$usuario_id = $_SESSION['id'];

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

            $consult2 = "DELETE FROM `news` WHERE `news`.`user_id` = '$usuario_id' AND `news`.`news_source_id` = '$id' ";
            $connect2 = getConnection();
            $result2 = mysqli_query($connect2, $consult2);

            if ($result) {

                $connex3 = getConnection();
                $consult3 = "SELECT id FROM newssources WHERE name = '$name' AND category = '$categories'";
                $result3 = mysqli_query($connex3, $consult3);
                $news = mysqli_fetch_array($result3);
                $id_newssource = $news['id'];

                saveRSS($rss, $id_newssource, $usuario_id, $categories);

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