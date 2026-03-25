<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Backend : ajoutes la date et l'heure de passage d'un badge - formulaire</title>
  <link rel="stylesheet" href="">
</head>

<?php
$dbh = new PDO('mysql:dbname=test;host=localhost;charset=utf8', 'root', '');
$est_dans_la_base = false;

$codebadge = $_GET['res'];
$heure_actuelle = date('H:i:s');
$date_actuelle = date('Y-m-d');
$result = $dbh->query("SELECT * FROM codebadge1");
while (($row = $result->fetch(PDO::FETCH_ASSOC))&& $est_dans_la_base == False) {
    if ($row['code_badge'] == $codebadge) {
      $est_dans_la_base = true;
      }
    }

$query = $dbh->query("INSERT INTO passage(heure_passage, date, code_badge_scan, valide) 
VALUES ('$heure_actuelle', '$date_actuelle', '$codebadge', '$est_dans_la_base')");

?>