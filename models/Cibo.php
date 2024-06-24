<?php

class Cibo
{
    public $prodotto;
    public $cibo;

    public function __construct(Prodotto $prodotto, $cibo,)
    {
        $this->prodotto = $prodotto;
        $this->cibo = $cibo;
    }
}
