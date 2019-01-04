<?php

if (!isset($_COOKIE['rasmus'])) {
    setcookie('rasmus', 'Créateur php');
} else {
    echo $_COOKIE['rasmus'];
}

