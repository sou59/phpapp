<?php 
    session_start();
    //ouvrir connexion
    include ("../config/database.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Message envoyé</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    </head>

    <body>
        <!-- Le contenu de la page -->
        <div class="container pt-5">

            <h1>Bonjour <?php echo $_SESSION['nom']. " " .$_SESSION['prenom'] ;  ?></h1>

            <div class="lien">
                <a href="accueilMessagerie.php">Accueil</a>
                <a href="./logout.php">Déconnexion</a>
            </div>

            <div class="recherche">
                <?php
                $query = "";
                if(isset($_POST['query'])) {
                    $query = $_POST['query'];
                
                    echo sprintf('<h2>Résultat de votre recherche pour : %s</h2>', $query);
                    // Récupérer la liste des objets qui correspondent au terme de recherche
                    $SQLquery = $connexion->prepare('SELECT * FROM mail WHERE objet LIKE :query');
                    // Le pourcentage signifie n'importe quel caractère
                    $SQLquery->bindValue(':query', '%'.$query.'%', PDO::PARAM_STR);
                    $SQLquery->execute();
                    $objets = $SQLquery->fetchAll();
                }
                ?>

                <form class="form-inline my-2 my-lg-0 mx-auto" method="post" action="rechercheMail.php">
                    <input class="form-control mr-sm-2" type="search" name="query" placeholder="Recherche">
                    <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Recherche</button>
                </form>
            </div>

            <div class="reception">  
                <fieldset>
                    
                    <table class="table table-bordered">
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
                    <?php
                    if(isset($_POST['query'])) {
                    // On affiche la liste des messages avec l'objet recherché
                        foreach ($objets as $objet) {
                        ?>
                            <tr>
                                <td scope="col">
                                    <?php echo $objet['expediteur']; ?>
                                </td>
                                <td scope="col">
                                    <a href="./contenuMessage.php/?id=<?php echo $objet['id'] ?>"><?php echo $objet['objet']; ?></a>
                                </td>
                                <td scope="col">
                                    <?php echo $objet['texte']; ?>
                                </td>
                            </tr>
                            <?php
                        }
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
    if(isset($_POST['query'])) {
        $SQLquery->closeCursor(); 
    }

    // fermer la connexion
    $connexion=NULL;
?>