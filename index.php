<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
	<title>JPO BUT R&T</title>
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    </head>
	
    <body>
	<form method="post" action="traitement.php">
	    <label>Nom: </label>
        <input type="text" name="nom" id="nom" required>
        <label>Prénom: </label>
        <input type="text" name="prenom" id="prenom" required><br />
	    <label>Email:</label>
        <input type="email" name="mail" id="mail" required><br />
        <label>Lycée</label>
        <input type="text" name="lycee" id="lycee" required><br />
        <label>Filière</label>
        <input type="text" name="filiere" id="filiere" required><br />
        <p>Connaissance de la formation ?</p>
        <input type="radio" id="etudiant" name="connaissance" value="etudiant">
        <label for="etudiant">Etudiant(s)</label>
        <input type="radio" id="entourage" name="connaissance" value="entourage">
        <label for="connaissance">Entourage</label>
        <input type="radio" id="forma" name="connaissance" value="forma">
        <label for="forma">Lycée</label></br>
	    <input type="submit" name="submit" value="Envoyez votre message !" id="envoi" />
	</form>
    </body>
</html>
