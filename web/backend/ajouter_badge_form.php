<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Ajouter un badge</title>
  <link rel="stylesheet" href="style.css">
</head>







<body>

  <h1>Ajouter un badge</h1>
<div class="card">
      <form method="POST" action="ajouter_badge.php">
      
          <div class="form-group">
            <label for="code_badge">Code du badge :</label>
            <input type="text" name="code_badge" id="code_badge" required>
          </div>

          <div class="form-group">
            <label for="nom_badge">Nom de la personne :</label>
            <input type="text" name="nom_badge" id="nom_badge" required>
          </div>

          <div class="form-group checkbox-group">
            <label for="admin">Droits administrateur :</label>
            <input type="checkbox" name="admin" id="admin" value="1"> 
          </div>

          <input type="submit" value="Ajouter le badge">
      </form>
  </div>

  <div class="retour-accueil">
      <a href="page_web.php" class="btn-retour">Retour à l'accueil</a>
  </div>
  
</body>
</html>