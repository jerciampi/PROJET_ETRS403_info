<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Backend : modifier un badge</title>
  <link rel="stylesheet" href="">
</head>







<body>
<?php 

$dbh = new PDO('mysql:dbname=test;host=localhost;charset=utf8', 'root', '');

$id_badge = $_POST['id_balade'];
$result_actuel = $dbh->query("SELECT * FROM codebadge1 WHERE id_badge='$id_badge'");
$badge = $result_actuel->fetch(PDO::FETCH_ASSOC);


$code_badge = ($_POST['code_badge'] != '') ? $code_badge=$_POST['code_badge'] : $badge['code_badge'];
$nom_badge = ($_POST['nom_badge'] != '') ? $code_badge=$_POST['nom_badge'] : $badge['nom_badge'];

$result = $dbh->query("UPDATE codebadge1 SET code_badge='$code_badge', nom_badge='$nom_badge' 
    WHERE id_badge='$id_badge'");

echo "<p>\n";
echo "Le badge a bien été modifié dans la base  : <br>\n";
echo '</p>'
?>

</body>
</html>