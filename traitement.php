<?php
// Connexion à la base de données
$date = date("d/m/Y");
try
{
    $bdd = new PDO('mysql:host=db;dbname=iut;charset=utf8', 'root', 'Root1');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO jpo (Nom, Prenom, Email, Lycee, Filiere, Connaissance, Date) VALUES(?, ?, ?, ?, ?, ?,?)');
$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['lycee'], $_POST['filiere'], $_POST['connaissance'], $date));

// Redirection du visiteur vers la page du minichat
header('Location: index.php');
?>