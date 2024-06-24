<?php

class Gioco
{
    public $gioco;
    public $prodotto;

    //costrutto per la classe gioco dove aggiungo quello che c'è nella classe prodotto
    public function __construct(Prodotto $prodotto, $gioco)
    {
        $this->prodotto = $prodotto;
        $this->gioco = $gioco;
    }
}
