<head>
  <meta charset="utf-8">
  <title>Backend : ajouter une balade</title>
  <link rel="stylesheet" href="">
</head>







<body>
<?php 

$nom_balade = $_POST['nom_balade'];
$description = $_POST['description'];
$lieux_depart = $_POST['lieux_depart'];
$date_real = $_POST['date_real'];
$trace_gpx = $_POST['trace_gpx'];
$distance = $_POST['distance'];
$altitude_max = $_POST['altitude_max'];
$denivele = $_POST['denivele'];
$duree = $_POST['duree'];
$photos_sortie = $_POST['photos_sortie'];
$id_type_sortie = $_POST['id_type_sortie'];
$id_chien = $_POST['id_chien'];
$id_difficulte = $_POST['id_difficulte'];

$dbh = new PDO('mysql:dbname=ciampij;host=localhost;charset=utf8', 'root', '');



$result = $dbh->query("UPDATE balade SET nom_balade='$nom_balade', description= '$description', lieux_depart='$lieux_depart', date_real='$date_real', trace_gpx='$trace_gpx', distance='$distance', altitude_max='$altitude_max', denivele='$denivele', duree='$duree', photos_sortie='$photos_sortie', id_type_sortie='$id_type_sortie', id_chien='$id_chien', id_difficulte='$id_difficulte')
WHERE id_balade='$id_balade'");

echo "<p>\n";
echo "La balade a bien été rajoutée dans la base  : <br>\n";
echo '</p>'
?>

</body>