<?php

$usuario_id = $_SESSION['id'];

if (isset($_POST['add-sources'])) {
    if (strlen($_POST['name'] >= 1) && strlen($_POST['rss'] >= 1) && strlen($_POST['categories'] >= 1)) {

        $name = $_POST['name'];
        $rss = $_POST['rss'];
        $category = $_POST['categories'];

        $invalidurl = false;
        if (@simplexml_load_file($rss)) {
            $news = simplexml_load_file($rss);
            $consult = "INSERT INTO newssources VALUES ('', '$name', '$rss', '$category', '$usuario_id') ";

            $connex = getConnection();
            $result = mysqli_query($connex, $consult);

            if ($result) {
                $connex2 = getConnection();
                $consult2 = "SELECT id FROM newssources WHERE name = '$name' AND category = '$category'";
                $result2 = mysqli_query($connex2, $consult2);
                $news = mysqli_fetch_array($result2);
                $id_newssource = $news['id'];

                saveRSS($rss, $id_newssource, $usuario_id, $category);

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