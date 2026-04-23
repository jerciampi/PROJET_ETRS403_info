<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Voir les badges</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Liste des badges enregistrés</h1>

  <div class="badge-list">
  <?php
    $dbh = new PDO('mysql:dbname=test;host=localhost;charset=utf8', 'root', '');
    $result = $dbh->query("SELECT * FROM codebadge1");
    
    if($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            echo '<div class="badge-item">';
            echo '<span class="badge-id">ID: ' . htmlspecialchars($row['id_badge'] ?? '') . '</span> ';
            echo '<span class="badge-code">' . htmlspecialchars($row['code_badge']) . '</span> ';
            echo '<span class="badge-name">' . htmlspecialchars($row['nom_badge']) . '</span>';
            echo '</div>';
        }
    } else {
        echo '<div class="badge-item">Aucun badge trouvé.</div>';
    }
  ?>
  </div>

  <div class="retour-accueil">
      <a href="page_web.php" class="btn-retour">Retour à l'accueil</a>
  </div>

</body>
</html>