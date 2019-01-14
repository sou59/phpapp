<?php

    function userIsLogged() {
        return isset($_SESSION['user']);
    }
    if (userIsLogged()) { // Si l'utilisateur est connecté, on le redirige vers la home
        header('Location: index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Créer un compte</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="main.js"></script>
    </head>
    <body>
        <div class="flex-container">
            
            <div class="creerCompte">
                <form action="verifCreation.php" method="post" class="myForm" enctype="multipart/form-data">
                    <div class="verif">
                        
                    </div>
                <fieldset>
                    <legend> Création de compte : </legend>   
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input id="nom" name="nom" type="text" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input id="prenom" name="prenom" type="text" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="mail">Mail</label>
                        <input id="mail" name="mail" type="email" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Num. téléphone</label>
                        <input id="telephonep" name="telephone" type="text" class="form-control" value="">
                    </div>
                    <div>
                        <label for="login">Login</label>
                        <input id="login" name="login" type="text" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="mdp">Mot de passe</label>
                        <input id="mdp" name="mdp" type="password" class="form-control" value="">
                    </div>
                    <div class="form-group">
                        <label for="cfpassword">Confirmer le mot de passe</label>
                        <input type="password" name="cfmdp" id="cfmdp" class="form-control" value="">
                    <div>
                </fieldset>

                    <div class="boutondroit">
                        <button class="" type="submit">Valider</button>
                    </div>
                </form>
            
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    </body>
</html>