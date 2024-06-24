<?php

include __DIR__ . "/store.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>PHP-OOP-2</title>
</head>

<body>

    <h2 class="text-center">Le Card dei giochi per animali sono:</h2>
    <div class="row m-0 p-0 justify-content-between">
        <?php foreach ($prodotti_gioco as $gioco) { ?>
            <div class="card col-4 px-3 py-4 bg-black">
                <img src="<?= $gioco->prodotto->immagine ?>" class="card-img-top img-fluid h-100" alt="immagine-film">
                <div class="card-body bg-white text-center">
                    <h5 class="card-title"><b>Marca:</b> <?= $gioco->prodotto->nome ?></h5>
                    <p class="card-text"><b>Prezzo:</b> <?= $gioco->prodotto->prezzo ?> <b>€</b></p>
                    <p class="card-text"><b>Tipo:</b> <?= $gioco->gioco ?></p>
                    <p class="card-text"><b>Adatto Per:</b></p>
                    <img src="<?= $gioco->prodotto->categoria->get_icona() ?>" alt="" class="w-25">
                </div>
            </div>
        <?php } ?>
    </div>

    <h2 class="text-center">Le Card delle Cucce per animali sono:</h2>
    <div class="row m-0 p-0 justify-content-between">
        <?php foreach ($prodotti_cuccia as $cuccia) { ?>
            <div class="card col-4 px-3 py-4 bg-black">
                <img src="<?= $cuccia->prodotto->immagine ?>" class="card-img-top img-fluid h-100" alt="immagine-film">
                <div class="card-body bg-white text-center">
                    <h5 class="card-title"><b>Marca:</b> <?= $cuccia->prodotto->nome ?></h5>
                    <p class="card-text"><b>Prezzo:</b> <?= $cuccia->prodotto->prezzo ?> <b>€</b></p>
                    <p class="card-text"><b>Tipo:</b> <?= $cuccia->cuccia ?></p>
                    <p class="card-text"><b>Adatto Per:</b></p>
                    <img src="<?= $cuccia->prodotto->categoria->get_icona() ?>" alt="" class="w-25">
                </div>
            </div>
        <?php } ?>
    </div>

</body>

</html>