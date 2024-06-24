<?php

class Cuccia
{
    public $cuccia;
    public $prodotto;

    public function __construct(Prodotto $prodotto, $cuccia,)
    {
        $this->prodotto = $prodotto;
        $this->cuccia = $cuccia;
    }
}
