<?php
include ("../config/database.php");

 /*$login = $_POST['login'];
 $password = $_POST['mdp'];
 
 $resultats = $connexion->query("SELECT * from user WHERE login like $login and password like '$password'");
 $resultats->setFetchMode(PDO::FETCH_OBJ);

 $row = $resultats->fetchAll();
 
    if((count($row)) == 0) {
         echo "<div>Votre login ou mot de passe n'est pas valide</div>";
    }else {
         header("Location: accueilMessagerie.php");
    }

*/

/*
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
*/
    if (!empty($_POST)) {
        $login = $_POST['login'];
        $password = $_POST['password'];
        // Vérifie que le login existe en BDD
        $query = $connexion->prepare('SELECT * FROM user WHERE login = :login');
        $query->bindValue(':login', $login, PDO::PARAM_INT);
        $query->execute();
        $user = $query->fetch(); // Retourne un tableau avec le user ou false
        $error = null;

        
        
        // Si le user n'existe pas en BDD
        if (!$user) {
            $error = 'Le login inconnu.';
        }
        // Est-ce que le mot de passe est correct ?
        if ($user && !password_verify($password, $user['password'])) {
            $error = '<div>Le mot de passe non correct</div>';
        }
        // Si le user existe, on peut se connecter
        if (count($error) == 0) {
            // Ajout de l'utilisateur dans la session
            unset($user['password']); // On enlève le mot de passe "hashé" par sécurité

            session_start();
            $_SESSION['user'] = $user['user'];
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['nom'] = $user['nom'];
            $_SESSION['prenom'] = $user['prenom'];
            $_SESSION['mail'] = $user['mail'];
          

            // Après la connexion, on veut rediriger l'utilisateur vers la dernière page sur laquelle il était
            header('Location: accueilMessagerie.php');
            //exit();
        }else {
            header('Location: ../index.php?error=ok');
        }

    }
?> 