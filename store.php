<?php
include __DIR__ . "/models/Prodotto.php";
include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/models/Gioco.php";
include __DIR__ . "/models/Cuccia.php";
include __DIR__ . "/models/Cibo.php";

$cane = new Categoria("Cane");
$gatto = new Categoria("Gatto");

//creo lista giochi e gli dico che e uguale a prodotto e a categoria e gli passo gli argomenti che gli servono prodotto(marca,prezzo,immagine) categoria(animale,icona-animale)
$prodotti_gioco = [
    new Gioco("Purina", "Osso", 10, "img/osso-cane.jpg", $cane, "Osso"),
    new Gioco("Purina", "Topo", 10, "img/topo_gatto.webp", $gatto, "Cotone"),
    new Gioco("Purina", "Palla", 10, "img/palla_cani.jpg", $cane, "Spugna"),
    new Gioco("Purina", "Peluches", 10, "img/peluches_cani.webp", $cane, "Gomma"),
    new Gioco("Purina", "Palla", 10, "img/palla_gatto.jpg", $gatto, "Plastica"),
    new Gioco("Purina", "Peluches", 10, "img/peluches_gatto.jpeg", $gatto, "Cotone"),
];

//creo lista cucce e gli dico sempre che gli argomenti sono quelli di prodotto e categoria prodotto(marca,prezzo,immagine) categoria(animale,icona-animale)
$prodotti_cuccia = [
    new Cuccia("Ferplast", "Cuccia", 120, "img/cuccia_plastica_cane.jpeg", $cane, "120*55*200", "Plastica"),
    new Cuccia("Igloo", "Cuccia", 35, "img/cucce_gatto_interno.jpeg", $gatto, "80*35*120", "Plastica"),
    new Cuccia("Bedsure", "Cuccia", 80, "img/cuccia_interno_cane.jpeg", $cane, "130*75*200", "Plastica"),
    new Cuccia("Pet Around", "Cuccia", 95, "img/cuccia_cane_legno.jpeg", $cane, "130*55*250", "Legno"),
    new Cuccia("Jackson", "Cuccia", 129, "img/cucce_gatto.jpg", $gatto, "100*50*120", "Plastica")
];

//creo lista cibo  e gli dico sempre che gli argomenti sono quelli di prodotto e categoria prodotto(marca,prezzo,immagine) categoria(animale,icona-animale)
$prodotti_cibo = [
    new Cibo("Whiskas", "Crocchette", 23, "img/crocchette_whiskas.webp", $gatto, "300kcal", "Miste"),
    new Cibo("Royal Canin", "Crocchette", 27, "img/crocchette_royal.webp", $cane, "3000kcal", "Miste"),
    new Cibo("Sheba", "Scatoletta", 3, "img/cibo_scatoletta_sheba.webp", $gatto, "230kcal", "Carne Pollo"),
    new Cibo("Eukanuba", "Crocchette", 13.99, "img/crocchette_eukanuba.webp", $cane, "250kcal", "Miste"),
    new Cibo("Sheba", "Scatolette", 3.50, "img/cibo_scatoletta_sheba.webp", $gatto, "150kcal", "Pesce"),
    new Cibo("Cesar", "Scatolette", 3.99, "img/cibo_scatoletta_cane.webp", $cane, "100kcal", "Carne Manzo")
];

$prodotti_generici = [
    new Cuccia("Ferplast", "Cuccia", 120, "img/cuccia_plastica_cane.jpeg", $cane, "120*55*200", "Plastica"),
    new Gioco("Purina", "Osso", 10, "img/osso-cane.jpg", $cane, "Osso"),
    new Gioco("Purina", "Topo", 10, "img/topo_gatto.webp", $gatto, "Cotone"),
    new Cibo("Whiskas", "Crocchette", 23, "img/crocchette_whiskas.webp", $gatto, "300kcal", "Miste"),
    new Cuccia("Igloo", "Cuccia", 35, "img/cucce_gatto_interno.jpeg", $gatto, "80*35*120", "Plastica"),
    new Gioco("Purina", "Peluches", 10, "img/peluches_cani.webp", $cane, "Gomma"),
    new Cibo("Sheba", "Scatoletta", 3, "img/cibo_scatoletta_sheba.webp", $gatto, "230kcal", "Carne Pollo"),
    new Gioco("Purina", "Palla", 10, "img/palla_gatto.jpg", $gatto, "Plastica"),
    new Cuccia("Pet Around", "Cuccia", 95, "img/cuccia_cane_legno.jpeg", $cane, "130*55*250", "Legno"),
    new Gioco("Purina", "Palla", 10, "img/palla_cani.jpg", $cane, "Spugna"),
    new Cuccia("Jackson", "Cuccia", 129, "img/cucce_gatto.jpg", $gatto, "100*50*120", "Plastica"),
    new Cibo("Royal Canin", "Crocchette", 27, "img/crocchette_royal.webp", $cane, "3000kcal", "Miste"),
    new Cibo("Eukanuba", "Crocchette", 13.99, "img/crocchette_eukanuba.webp", $cane, "250kcal", "Miste"),
    new Cibo("Sheba", "Scatolette", 3.50, "img/cibo_scatoletta_sheba.webp", $gatto, "150kcal", "Pesce"),
    new Cuccia("Bedsure", "Cuccia", 80, "img/cuccia_interno_cane.jpeg", $cane, "130*75*200", "Plastica"),
    new Gioco("Purina", "Peluches", 10, "img/peluches_gatto.jpeg", $gatto, "Cotone"),
    new Cibo("Cesar", "Scatolette", 3.99, "img/cibo_scatoletta_cane.webp", $cane, "100kcal", "Carne Manzo")
];
