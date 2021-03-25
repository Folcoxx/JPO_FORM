<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>JPO BUT R&T</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
	
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">JPO BUT R&T 2021</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="./index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
   <div class="row">
    <div class="col-lg-8">
     <h1 class="mt-4">Formulaire</h1>
     <hr>
     <div class="card my-4">
      
       <div class="card-body">
        <form method="post" action="traitement.php">
          <div class="form-row">
             <div class="col">
               <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom" required>
             </div>
             <div class="col">
               <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom" required><br />
	           </div>
          </div>
          <input type="email" name="mail"  id="mail" class="form-control" placeholder="email..." required><br />
          <input type="text" name="lycee" id="lycee" class="form-control" placeholder="Lycée" required><br />
          <input type="text" name="filiere" id="filiere" class="form-control" placeholder="Filière" required><br />
          <p>Connaissance de la formation ?</p>
          <input type="radio" id="etudiant" name="connaissance" value="etudiant">
          <label for="etudiant">Etudiant(s)</label>
          <input type="radio" id="entourage" name="connaissance" value="entourage">
          <label for="connaissance">Entourage</label>
          <input type="radio" id="forma" name="connaissance" value="forma">
          <label for="forma">Lycée</label></br></br>
	        <input type="submit" name="submit" class="btn btn-primary" value="Envoyez votre message !" id="envoi" />
        </form>
       <div class="card-body">
     </div>
    </div>
   </div>
  </div>
</body>
</html>
