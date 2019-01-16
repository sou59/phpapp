<?php
namespace  Model\Store;

use Aston\Cart\Product;

interface StoreInterface {

    public function insert(Product $product);
    public function update(Product $product);

    public function delete(Product $product);
    public function find($id): Product;
    public function findAll();



}