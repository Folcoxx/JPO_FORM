<?php
// Connexion à la base de données

try
{
    $bdd = new mysqli('localhost', 'root', 'Root1', 'iut');
    $bdd->set_charset("utf8");
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO jpo (Nom, Prenom, Email, Lycee, Filiere, Connaissance) VALUES(?, ?, ?, ?, ?, ?)');
$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['lycee'], $_POST['filiere'], $_POST['connaissance']));

// Redirection du visiteur vers la page du minichat
header('Location: index.php');
?>