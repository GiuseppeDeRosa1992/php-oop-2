<?php

class Prodotto
{
    public $nome;
    public $prezzo;
    public $immagine;
    public $categoria;

    //costrutto di prodotto che ha dentro la classe categoria in cui ci sono altre variabili
    public function __construct($nome, $prezzo, $immagine, Categoria $categoria)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
    }
}
