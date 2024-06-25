<?php

class Cibo extends Prodotto
{
    public $kcal_cibo;
    public $tipo_cibo;

    //costrutto di prodotto che ha dentro la classe categoria in cui ci sono altre variabili
    public function __construct($marca, $nome, $prezzo, $immagine, Categoria $categoria, $cal, $tipo)
    {
        $this->marca = $marca;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
        $this->kcal_cibo = $cal;
        $this->tipo_cibo = $tipo;
    }
}
