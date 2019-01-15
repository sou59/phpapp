<?php

namespace Aston\Cart;

class Basket
{
    /**
     * @var array
     */
    private $quantity = [];

    /**
     * @var array
     */
    private $products = [];

    /**
     * @param Product $product
     * @return $this
     */
    protected function setProduct(Product $product) {
        $this->products([$product->getId()] = $product;
        return $this;

    }

    /**
     * @param Product $product
     * @return $this
     */
    protected function setQuantity(Product $product) {
        $this->quantity[$product->getId()] = 0;
        return $this;
    }


}