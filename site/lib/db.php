<?php
/*$user="root";
$pass= "";
$db = "messagerie";
*/
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'site');

try {
   // $connexion = new PDO("mysql:host=localhost;dbname=$db", $user, $pass);

    $connexion = new PDO('mysql:host='.HOST.';dbname='.DB.';charset=utf8', USER, PASS, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // Active les erreurs SQL
    ]);

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
}