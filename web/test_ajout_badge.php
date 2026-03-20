<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Backend : ajouter un badge - requête</title>
  <link rel="stylesheet" href="projet.css">
</head>

<body>
<p>
    <label for="nom_badge">description :</label>
  <input type="text" name="nom_badge"> 
  </p>

<?php 
$codeBadge = $_GET['res']  
# $nom_badge = $_POST['nom_badge']

$dbh = new PDO('mysql:dbname=projet_etrs403_infoo;host=localhost;charset=utf8', 'root', '');

$result = $dbh->query("SELECT * FROM codebadge);

$danslaBase = false;

while ($row = $result->fetch(PDO::FETCH_ASSOC) && $danslaBase == False) {
  if ($row['code_badge'] == $codeBadge) {
    $danslaBase = True;
    }

if ($danslaBase == false) {
  $res = $dbh->query("INSERT INTO codebadge(code_badge) VALUES('$codeBadge'));


?>

</body>


</html>