<?php
include __DIR__ . "/models/Prodotto.php";
include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/models/Gioco.php";
include __DIR__ . "/models/Cuccia.php";

//creo lista giochi e gli dico che e uguale a prodotto e a categoria e gli passo gli argomenti che gli servono prodotto(marca,prezzo,immagine) categoria(animale,icona-animale)
$prodotti_gioco = [
    new Gioco(new Prodotto("Purina", 10, "img/osso-cane.jpg", new Categoria("Cane")), "Osso"),
    new Gioco(new Prodotto("Purina", 10, "img/topo_gatto.webp", new Categoria("Gatto")), "Topo"),
    new Gioco(new Prodotto("Purina", 10, "img/palla_cani.jpg", new Categoria("Cane")), "Palla"),
    new Gioco(new Prodotto("Purina", 10, "img/peluches_cani.webp", new Categoria("Cane")), "Peluches"),
    new Gioco(new Prodotto("Purina", 10, "img/palla_gatto.jpg", new Categoria("Gatto")), "Palla"),
    new Gioco(new Prodotto("Purina", 10, "img/peluches_gatto.jpeg", new Categoria("Gatto")), "Peluches"),
];

//creo lista cucce e gli dico sempre che gli argomenti sono quelli di prodotto e categoria prodotto(marca,prezzo,immagine) categoria(animale,icona-animale)
$prodotti_cuccia = [
    new Cuccia(new Prodotto("Ferplast", 120, "img/cuccia_plastica_cane.jpeg", new Categoria("Cane")), "Cuccia in Plastica Esterno"),
    new Cuccia(new Prodotto("Igloo", 35, "img/cucce_gatto_interno.jpeg", new Categoria("Gatto")), "Cuccia per Interno"),
    new Cuccia(new Prodotto("Bedsure", 80, "img/cuccia_interno_cane.jpeg", new Categoria("Cane")), "Cuccia per Interno"),
    new Cuccia(new Prodotto("Pet Around", 95, "img/cuccia_cane_legno.jpeg", new Categoria("Cane")), "Cuccia in Legno per Esterno"),
    new Cuccia(new Prodotto("Jackson", 129, "img/cucce_gatto.jpg", new Categoria("Gatto")), "Cuccia Legno per Esterno")
];
