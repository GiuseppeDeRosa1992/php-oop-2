<?php

class Prodotto
{
    public $marca;
    public $prezzo;
    public $immagine;
    public $categoria;

    //costrutto di prodotto che ha dentro la classe categoria in cui ci sono altre variabili
    public function __construct($marca, $prezzo, $immagine, Categoria $categoria)
    {
        $this->marca = $marca;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }
}
