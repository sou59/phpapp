<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Nouveau message</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
    </head>

    <body>

        <div class="flex-container">
            <div class="formulaire">
                <form action="verifNouveauMessage.php" method="post" class="myForm" enctype="multipart/form-data">
                    <fieldset class="border-2">
                        <legend class="w-auto"> Nouveau message </legend>   
                        <div>
                            <label for="destinataire">&Agrave; : </label>
                            <input id="destinataire" name="destinataire" type="text">
                        </div>
                      
                        <div>
                            <label for="objet">Objet : </label>
                            <input id="objet" name="objet" type="text">
                        </div>

                        <div>
                            <label for="message">Votre message : </label>
                            <textarea name="texte" id="message" cols="30" rows="10" placeholder="Hello PHP"></textarea>
                        </div>

                        <div>
                            <button name="submit" class="btn success" type="submit">Envoyer</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>