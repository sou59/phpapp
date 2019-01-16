<?php
ini_set('display_errors', true);

require './vendor/autoload.php';
$fixture = require 'fixture.php';

$basket = new \Aston\Cart\Product();

$store = new \Model\Store\Mock();



$store->load($fixture['products']);

var_dump($store->find(1));





