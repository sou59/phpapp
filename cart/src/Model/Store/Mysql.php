<?php

namespace Model\Store;

use Aston\Cart\Product;
use SplObjectStorage;

class Mysql implements StoreInterface {

    private $products;

    public function __construct()
    {

    }

    public function load(array $products) {

    }

    public function insert(Product $product)
    {
        $this->products->attach($product);
    }

    public function update(Product $product)
    {
    }

    public function delete(Product $product)
    {
    }

    public function find($id): Product
    {
        return new Product();
    }

    public function findAll()
    {
    }
}