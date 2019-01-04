<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 03/01/19
 * Time: 10:27
 */

// différence entre double et simple cote pour les variable saclaire simple, simple n'interpréte pas les variable, double oui

$name = 'toto';

echo 'Bonjour $name';
echo '<br>';
echo "Bonjour $name";
echo '<br>';
// les tableaux
$arr = array('a', 'b', 'c');
$arr[] = 'd'; // ajout d'un élément
var_dump($arr);

echo '<br>';

print_r($arr);

echo '<br>';

$a[] = array('une valeur'); // un tableau avec un élément tableau

print_r($a);

$b[] = 'une valeur';
echo '<br>';
print_r($b);

$c = ['chuck', 'Norris'];
echo '<br>';
print_r($c);

$c[50] = 'Un test';
echo '<br>';
print_r($c); // Array ( [0] => chuck [1] => Norris [50] => Un test )

echo '<br>';

$users = [
    [
        'name' => 'Chuck',
        'age' => 'eternel',
        'ville' => 'texas',
    ],
    [
        'name' => 'Steven',
        'age' => '60',
        'ville' => 'texas',
    ]
];
print_r($users);

echo '<br>';
echo 'Steven a ' . $users[1][age] . ' ans';
echo '<br>';

// tupe de variable
echo gettype($users) . '<br><br>';

// type de ressource (bdd, fichier...

$fp = fopen('content.txt', 'r'); // ouvrir un fichier en mode lecture

echo gettype($fp); // type : ressource

echo '<br>';

echo fread($fp, 512); // lire le fichier 512 caractères

echo '<br>';

$str = (int) '125'; // cast en integer
$str = (string) $str
;
echo gettype($str);

echo '<br>';

// 5+ '123partez => 125
// [0.5 => 'toto'] arrondi l'indice à 0 et écrase l'indice 0 si il existe

$person = [
        'name' => 'Chuck',
        'age' => 'eternel',
        'ville' => 'texas',
    ];

$person = (object) $person;

echo $person->name;

