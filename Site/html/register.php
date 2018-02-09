<?php
//Verif Error
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Connexion à la base de données
try {
    $pdo = new PDO('mysql:host=localhost;dbname=ecommerce', 'root', 'root');

} catch (Exception $e) {
    die('Erreur : ' .$e->getMessage());
}


//On vérifie que l'utilisateur a bien envoyé les informations demandées
if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["password2"])){

    //On vérifie que password et password2 sont identiques
    if($_POST["password"] == $_POST["password2"]){


        //On utilise alors notre fonction password_hash :
        $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

        //Puis on stock le résultat dans la base de données :
        $query = $pdo->prepare('INSERT INTO membres (username, password) VALUES(:username, :password)');
        $query->bindParam(':username', $_POST["username"]);
        $query->bindParam(':password', $hash);
        $query->execute();

        header('Location: index.php');
        exit();
    }
} else {
    echo('Fail');
}