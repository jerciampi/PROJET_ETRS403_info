<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Backend : ajouter une balade</title>
  <link rel="stylesheet" href="">
</head>







<body>
<?php 

$code_badge = $_POST['code_badge'];
$nom_badge = $_POST['nom_badge'];
if (isset($_POST['admin'])) {
  $admin = (bool) $_POST['admin'];
} else {
  $admin = false; 
}
$dbh = new PDO('mysql:dbname=test;host=localhost;charset=utf8', 'root', '');



$result = $dbh->query("INSERT INTO codebadge1(code_badge, nom_badge, admin) 
VALUES ('$code_badge', '$nom_badge', '$admin')");

echo "<p>\n";
echo "Le badge a bien été rajouté dans la base  : <br>\n";
echo '</p>'
?>

</body>