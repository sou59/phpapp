<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 03/01/19
 * Time: 11:36
 * @param string $name
 * @return string
 */

// les fonctions en PHP

function sayHello(string $name) {
    return "Hello $name";
}

echo sayHello(Toto);

echo'<br>';

$products = ['Macbook', 'GoogleBook', 'WindowsBook'];


function findProduct($index) {
    global $products;

    return $products[$index] ?? null;  // isarraykey existe comme sur la principe isset

}

echo findProduct(1);

echo'<br>';

function findProductByName($name) {
    global $products;
    $key = array_search($name, $products); // recherche l(index d'un nom dans un tableau

    if($key === false) { // vérifier que le 0 ne correspond pas à false, mais bien à un index = 0
        return null;
    }

    return $key;
}

echo findProductByName('GoogleBook');

