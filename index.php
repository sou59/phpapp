<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 03/01/19
 * Time: 09:56
 */

echo 'Hello world !';

// pas de balise de fermeture si ce n'est que du html à cause des entêtes qui seront réécrit à chaque fois et donc source d'erreur

$name = 'toto';

echo $name . '<br>';

//$a = 5;
//$b = &$a; // la valeur devient référence de l'adresse mémoire de a, du coup a et b ont la même @ mémoire
//$b = 10;

//echo $a; // $a = 5

echo '<br>';
$toto = 'Chuk Norris <br>';
echo '<br>';

// idem au niveau de l'écriture des deux lignes suivantes
echo $$name . '<br>';
echo '<br>';

echo ${$name};
echo '<br>';

$a = 'c';
$b = 'b';
$c = 'a';

echo $$$a;

echo '<br>';
