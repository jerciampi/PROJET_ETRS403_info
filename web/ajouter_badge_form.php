<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Backend : ajouter un badge manuellement - formulaire</title>
  <link rel="stylesheet" href="">
</head>







<body>

  <h1>Ajouter une balade</h1>
  
  <form method="POST" action="ajouter_badge.php" enctype="multipart/form-data">
  
  <p>
    <label for="code_badge">Code du badge :</label>
	<input type="text" name="code_badge">
  </p>

  <p>
    <label for="nom_badge">Nom de la personne :</label>
	<input type="text" name="nom_badge">
  </p>

 

</form>

<div class="retour-accueil">
    <a href="page_web.php" class="btn-retour">Retour à l'accueil</a>
</div>
  
  
  
</body>