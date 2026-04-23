<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Modifier un badge</title>
  <link rel="stylesheet" href="style.css">
</head>







<body>

  <h1>Choisir le badge à modifier</h1>
  <div class="card">
  <form method="POST" action="modifier_badge.php" enctype="multipart/form-data">

  <div class="form-group">
    <label for="id_badge">Badge a modifier :</label>
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
</div>
  
<h2>Modifier le badge choisi</h2>
<p style="font-size: 0.9em; color: #666;">(Laissez vide si vous ne voulez pas modifier la valeur)</p>
  <div class="form-group">
    <label for="code_badge">Code du badge :</label>
	<input type="text" name="code_badge">
</div>

  <div class="form-group">
    <label for="nom_badge">Nom du badge :</label>
	<input type="text" name="nom_badge">
</div>


	<input type="submit" value="Modifier le badge">

</form>
</div>

<div class="retour-accueil">
    <a href="page_web.php" class="btn-retour">Retour à l'accueil</a>
</div>
  
  
  
</body>
</html>