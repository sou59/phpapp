<?php
session_start();

ini_set('display_errors', 'On');

echo session_id();

$_SESSION['name'] = 'Rudy';
$_SESSION['age'] = 89;
$_SESSION['qi'] = 25;


echo $_SESSION['name'];