<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Backend : Modifier une balade - formulaire</title>
  <link rel="stylesheet" href="style.css">
</head>







<body>

  <h1>Choisir le badge à modifier</h1>
  
  <form method="POST" action="modifier_badge.php" enctype="multipart/form-data">

  <p><label for="id_badge">Balade a modifier :</label>
  <select name="id_badge">
  <option value=''>Choisissez le badge</option>
    <?php
    $dbh = new PDO('mysql:dbname=test;host=localhost;charset=utf8', 'root', '');
  
    $result = $dbh->query("SELECT * FROM codebadge1");
    
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      $nombadge = $row['nom_badge'];
      echo '<option value="' . $row['id_badge'] . '">' . $row['code_badge'] . ' (appartenant à ' . $nombadge . ')</option>';
    }
    ?>
</select>
<p>
  
<h1>Modifier le badge choisi</h1>
  <p>
    <label for="code_badge">Code du badge :</label>
	<input type="text" name="code_badge">
  </p>

  <p>
    <label for="nom_badge">Nom du badge :</label>
	<input type="text" name="nom_badge">
  </p>

  
  <p>
	<input type="submit" value="Modifier le badge">
  </p>

</form>

<div class="retour-accueil">
    <a href="page_web.php" class="btn-retour">Retour à l'accueil</a>
</div>
  
  
  
</body>