<?php

class Gioco extends Prodotto
{
    public $materiale_gioco;


    //costrutto di prodotto e in piu aggiungo nuova variabile
    public function __construct($marca, $nome, $prezzo, $immagine, Categoria $categoria, $materiale)
    {
        $this->marca = $marca;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
        $this->materiale_gioco = $materiale;
    }
}
