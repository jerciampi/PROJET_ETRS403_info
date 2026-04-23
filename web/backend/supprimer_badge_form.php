<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Action : Modifier un badge</title>
  <link rel="stylesheet" href="style.css">
</head>







<body>

  <h1>Supprimer un badge</h1>
  <div class="card">
  <form method="post" action="supprimer_badge.php" enctype="multipart/form-data">

  
  <div class="form-group">
  <label for="nom_badge">Badge a supprimer :</label>
  <select name="code_badge">
  <option value=''>Choisissez le badge</option>
    <?php
    $dbh = new PDO('mysql:dbname=test;host=localhost;charset=utf8', 'root', '');
  
    $result = $dbh->query("SELECT * FROM codebadge1");
    
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $nombadge = $row['nom_badge'];
        echo '<option value="' . $row['code_badge'] . '">' . $row['code_badge'] . ' (appartenant à ' . $nombadge . ')</option>';
    }
    ?>
</select>
</div>
  
  
	<input type="submit" value="Supprimer le badge" style="background-color: #dc3545;">
</form>
</form>

  
  <div class="retour-accueil">
    <a href="page_web.php" class="btn-retour">Retour à l'accueil</a>
</div>
  
</body>







</html>