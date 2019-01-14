<?php

namespace Aston\Cart;

class Basket
{
    private $panier;

    public function addProduct(): Product {
        $this->panier = new Product("Coca", "2");

    }


}