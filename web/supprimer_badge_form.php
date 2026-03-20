<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Backend : supprimer un badge - formulaire</title>
  <link rel="stylesheet" href="">
</head>







<body>

  <h1>Supprimer un badge</h1>
  
  <form method="post" action="supprimer_badge.php" enctype="multipart/form-data">

  
  <p><label for="nom_badge">Badge a supprimer :</label>
  <select name="nom_badge">
    <?php
    $dbh = new PDO('mysql:dbname=test;host=localhost;charset=utf8', 'root', '');
  
    $result = $dbh->query("SELECT * FROM codebadge1");
    
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['nom_badge'] . '">' . $row['code_badge'] . " " . $row['nom_badge'] . '</option>';
    }
    ?>
</select>
<p>
  
  <p>
	<input type="submit" value="Supprimer le badge">
  </p>

  
  <div class="retour-accueil">
    <a href="page_web.php" class="btn-retour">Retour à l'accueil</a>
</div>
  
</body>







</html>