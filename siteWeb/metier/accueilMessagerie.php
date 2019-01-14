<?php
    session_start();
    include ('../config/database.php');
    if (!isset($_SESSION['login'])) {
        // si ce n'est pas le cas, on le redirige vers l'accueil
        header ('Location: ../index.php');
        exit();
    }

    $query = $connexion->query("SELECT count(*) as nbreLu FROM mail WHERE lu=0");
    $query->setFetchMode(PDO::FETCH_OBJ);
    $row =$query->fetchAll();
    $nonlus= $row[0]->nbreLu;

    $moi = $_SESSION['mail'];
    //toute la table mail message envoye par user connecté
    $query = $connexion->query("SELECT count(*) as nbreLu2 FROM mail WHERE expediteur='$moi'");
    $query->setFetchMode(PDO::FETCH_OBJ);
    $row =$query->fetchAll();
    $nonlus2= $row[0]->nbreLu2;

?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Authentification</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
        <script src="main.js"></script>
    </head>

    <body>

        <div class="flex-container">
            <h1>Bonjour <?php echo $_SESSION['nom']." ".$_SESSION['prenom']; ?> </h1>
            
             <div class="message">
                <a href="./nouveauMessage.php">Nouveau message</a>
                <a href="./boiteReception.php">Boite de réception ( <?php echo $nonlus ?> )</a>
                <a href="./messageEnvoye.php">Messages envoyés (<?php echo $nonlus2 ?>)</a>
                <a href="./rechercheMail.php">Recherche de mail</a>
                <a href="./logout.php">Déconnexion</a>
            </div>
            
        </div>

    </body>
</html>