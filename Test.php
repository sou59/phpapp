<?php
ini_set('display_errors', 'On');

require 'Tv.php';
require 'Telecommande.php';

$tv = new Tv();
$telecommande = new Telecommande($tv);

$telecommande->increaseVolume();
$telecommande->increaseVolume();

echo $tv->getVolume();