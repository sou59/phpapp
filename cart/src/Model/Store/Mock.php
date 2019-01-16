<?php

namespace Model\Store;

use Aston\Cart\Product;
use SplObjectStorage;

class Mock implements StoreInterface {

    private $products;

    public function __construct()
    {
        $this->products = new SplObjectStorage();
    }

    public function load(array $products) {
        foreach ($products as $p) {
            $this->insert($p);
        }
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
        // TODO: Implement find() method.
        foreach($this->products as $p) {
            if($p->getId() == $id) {
                return $p;
            }
        }
        return null;
    }

    public function findAll()
    {
    }
}