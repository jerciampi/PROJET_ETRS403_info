<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Backend : ajouter une photo - requête</title>
  <link rel="stylesheet" href="">
</head>







<body>
<?php 

$nom_badge = $_POST['nom_badge'];

$dbh = new PDO('mysql:dbname=test;host=localhost;charset=utf8', 'root', '');



$result = $dbh->query("DELETE FROM codebadge1 WHERE  nom_badge='$nom_badge' ");

echo "<p>\n";
echo "Le badge a bien été supprimé dans la base  : <br>\n";
echo '</p>'
?>


</body>







</html>