<?php
    include ("../config/database.php");
 
 /*$login = $_POST['login'];
 $password = $_POST['mdp'];
 $nom = $_POST['nom'];
 $prenom = $_POST['prenom'];
 $mail = $_POST['mail'];
 $telephone = $_POST['telephone'];
 
 $resultats = $connexion->exec(
     "INSERT INTO user(login, password, nom, prenom, mail, telephone) 
    VALUES($login, '$password', '$nom', '$prenom', '$mail', $telephone)");

 $resultats->setFetchMode(PDO::FETCH_OBJ);


 header("Location: ../index.php");  
 */

/*$verif="!^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-zA-Z]{2,4}$!";
if(!preg_match($verif,$votremail)) {
        $reponse = "Votre email n'est pas bon"
}*/

 if (!empty($_POST)) { // Si on a soumis le formulaire
    $login = str_replace(' ', '', trim(strip_tags($_POST['login']))); // On supprime les balises HTML
    $password = trim($_POST['mdp']);
    $cfmdp = trim($_POST['cfmdp']);
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $telephone = $_POST['telephone'];
    
   
    $errors = [];
    // $name doit faire au moins 3 caractères
    if (strlen($nom) < 3) {
        $errors['nom'] = 'Le nom n\'est pas valide'; // équivaut à array_push($errors, 'Le nom n\'est pas valide');
    }

    if (empty($login)) { // On vérifie que le login n'est pas vide
        $errors['login'] = 'Le login est vide.';
    }
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) { // On vérifie que l'email soit valide
        $errors['mail'] = 'Email non valide.';
    }
    // Vérification mot de passe
    if (empty($password) || $password != $cfmdp) {
        $errors['password'] = 'Les mots de passe sont vides ou ne correspondent pas.';
    }
    // Inscription de l'utilisateur
    if (empty($errors)) {
        $query = $connexion->prepare('INSERT INTO user
        (login, password, nom, prenom, mail, telephone) VALUES
        (:login, :password, :nom, :prenom, :mail, :telephone)');
        $query->bindValue(':login', $login, PDO::PARAM_INT);
        $query->bindValue(':password', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);
        $query->bindValue(':nom', $nom, PDO::PARAM_STR);
        $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->bindValue(':telephone', $telephone, PDO::PARAM_STR);
        
        // On ajoute l'utilisateur dans la BDD
        if ($query->execute()) { 
            echo '<div class="alert alert-success">Vous êtes bien inscrit.</div>';
            header("Location: ../index.php");
        } 
    } 
   // var_dump($login, $mail, $password, $cfmdp, $errors);
}

?> 