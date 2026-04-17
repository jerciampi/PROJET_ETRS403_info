<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Backend : ajouter une balade</title>
  <link rel="stylesheet" href="">
</head>







<body>
<?php 

$codebadge = $_POST['code_badge'];
$nom_badge = $_POST['nom_badge'];
if (isset($_POST['admin'])) {
  $admin = (bool) $_POST['admin'];
} else {
  $admin = false; 
}
$dbh = new PDO('mysql:dbname=test;host=localhost;charset=utf8', 'root', '');

$result = $dbh->query("SELECT * FROM codebadge1");

      $danslaBase = false;

      while (($row = $result->fetch(PDO::FETCH_ASSOC))&& $danslaBase == False) {
        if ($row['code_badge'] == $codebadge) {
          $danslaBase = true;
          echo "<p>\n";
        echo "Le badge est déjà dans la base   <br>\n";
        echo '</p>';
          }
        }

      if ($danslaBase == false) {
        $res = $dbh->query("INSERT INTO codebadge1(code_badge, nom_badge, admin) 
VALUES ('$codebadge', '$nom_badge', '$admin')");
        echo "<p>\n";
        echo "Le badge a bien été rajouté dans la base   <br>\n";
        echo '</p>';
      }

?>

</body>