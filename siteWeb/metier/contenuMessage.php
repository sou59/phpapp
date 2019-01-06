<?php 
    session_start();
    //ouvrir connexion
    include ("../config/database.php");


    $id = $_GET['id'];
    $resultats = $connexion->query("SELECT * FROM mail WHERE id='$id'");
    $resultats->setFetchMode(PDO::FETCH_OBJ);

    $connexion->exec("UPDATE mail SET lu=1 WHERE id='$id'");

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Votre message</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>

    <body>

        <div class="container">
            <h1>Bonjour <?php echo $_SESSION['nom']." ".$_SESSION['prenom']; ?></h1>
            <a href="../accueilMessagerie.php">Accueil</a>
            <a href="../boiteReception.php">Boite de réception</a>
            <a href="../logout.php">Déconnexion</a>

            <div class="reception">  
                <fieldset>
                    <table class="table">
                        <tr>
                            <td scope="col">
                                Expediteur
                            </td>
                            <td scope="col">
                                Objet
                            </td>
                            <td scope="col">
                                Message
                            </td>
                        </tr>
                        <?php foreach($resultats as $row) { ?>
                            <tr>
                                <td>
                                    <?php echo $row->expediteur ?>
                                </td>
                                <td>
                                   <?php echo $row->objet ?> </a>
                                </td>
                                <td>
                                    <?php echo $row->texte ?>
                                </td>
                            </tr>
                    </table>
                        <?php
                        }
                        ?>   
                    </table>
                </fieldset>

            </div>
            
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>

<?php
    // fermer les requêtes
    $resultats->closeCursor(); 

    // fermer la connexion
    $connexion=NULL;
?>