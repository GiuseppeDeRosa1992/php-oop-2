<?php

class Prodotto
{
    public $marca;
    public $nome;
    public $prezzo;
    public $immagine;
    public $categoria;

    //costrutto di prodotto che ha dentro la classe categoria in cui ci sono altre variabili
    public function __construct($marca, $nome, $prezzo, $immagine, Categoria $categoria)
    {
        $this->marca = $marca;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }
}
