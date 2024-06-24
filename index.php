<?php
include __DIR__ . "/models/Prodotto.php";
include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/store.php";
$welcome = "ciao funziona tutto"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP-OOP-2</title>
</head>

<body>
    <h1>
        <?= $welcome ?>
    </h1>

    <pre>
        <?= var_dump($prodotti) ?>
    </pre>

    <ul>
        <?php foreach ($prodotti as $prodotto) { ?>
            <li> <?= $prodotto ?> </li>
        <?php } ?>
    </ul>
</body>

</html>