<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>partie3 ex10 Php</title>
</head>

<body>
    <?php
    $var = rand(0, 30);
    echo " la limite de la boucle sera $var";
    for ($counter = 1; $counter < 100; $counter++) {
        if ($counter != $var) {
            echo " on y va doucement $counter <br>";
        } else {
            break;
        }
    }

    ?>
</body>

</html>