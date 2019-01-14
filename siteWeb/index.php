<?php 
    $messageError = "";

   /* if((isset($error) && $error == "ok")) {
        $error = $_GET['error'];
        $messageError = "Erreur détecté";
    }
*/
    if(isset($_GET['error'])) {
        $error = $_GET['error'];
        $messageError = "Login / Mot de passe incorrect !";
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Authentification</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
        <script src="main.js"></script>
    </head>

    <body>

        <div class="container">
            <h1 class="login">IDP FULLSTACK MAIL</h1>
            
            <div class="formulaire">

                <form action="./metier/verifConnexion.php" method="post" class="myForm">
                
                    <div class="verif">
                        <?php echo $messageError; ?>
                    </div>

                    <div>
                        <label for="login">Login</label>
                        <input id="login" name="login" type="text">
                    <div>
                    <div>
                        <label for="password">Mot de passe</label>
                         <input id="password" name="password" type="password">
                    </div>
                    <div>
                        <a href="metier/creerCompte.php">Création de compte</a>
                    </div>
                    <div>
                        <button name="submit" class="" type="submit">Connexion</button>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>
