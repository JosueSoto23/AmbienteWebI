<?php

$ceu = array(
    "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid",
    "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest",
    "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"
);
ksort($ceu);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style.css">

    <title> Lista Paises </title>
</head>

<body>

    <header>
        <h1> Lista Paises </h1>
        <button onclick="location.href='Index2.php'"> Temperaturas </button>
    </header>

    <div>
        <table class="table">

            <thead>
                <tr>
                    <th> País </th>
                    <th> Capital </th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($ceu as $index => $value) { ?>
                    <tr>
                        <td><?php echo $index; ?></td>
                        <td><?php echo $value; ?></td>
                    </tr>
            </tbody>
        <?php
                }
        ?>

        </table>
    </div>

</body>

</html>