<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Action : Supprimer un badge</title>
  <link rel="stylesheet" href="style.css">
</head>







<body>
<?php 

$code_badge = $_POST['code_badge'];

$dbh = new PDO('mysql:dbname=test;host=localhost;charset=utf8', 'root', '');



$result = $dbh->query("DELETE FROM codebadge1 WHERE  code_badge='$code_badge' ");

echo "<p>\n";
echo "Le badge a bien été supprimé dans la base  : <br>\n";
echo '</p>'
?>


<div class="retour-accueil">
      <a href="page_web.php" class="btn-retour">Retour à l'accueil</a>
  </div>
  
</body>
</html>