<?php
    include ("../config/database.php");
    session_start();

   // $expediteur = $_POST['expediteur'];
    $destinataire = $_POST['destinataire'];
    $objet = $_POST['objet'];
    $texte = $_POST['texte'];

    $expediteur = $_SESSION['mail'];
    $lu = 0;

    $str = "INSERT INTO mail(expediteur, destinataire, objet, texte, lu) 
    VALUES('$expediteur', '$destinataire', '$objet', '$texte', $lu)";

    echo $str;

    var_dump($str);


    $resultats = $connexion->exec($str);

    header("Location: nouveauMessageConfirmation.php");  
?>