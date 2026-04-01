<!doctype html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <title>Backend : ajouter un badge - requête</title>
    <link rel="stylesheet" href="projet.css">
  </head>

  <body>

      <?php 
      $codeBadge = $_GET['res'];

      $dbh = new PDO('mysql:dbname=test;host=localhost;charset=utf8', 'root', '');

      $result = $dbh->query("SELECT * FROM codebadge1");

      $danslaBase = false;

      while (($row = $result->fetch(PDO::FETCH_ASSOC))&& $danslaBase == False) {
        if ($row['code_badge'] == $codeBadge) {
          $danslaBase = true;
          }
        }

      if ($danslaBase == false) {
        $res = $dbh->query("INSERT INTO codebadge1(code_badge) VALUES('$codeBadge')");
      }


      ?>

  </body>


</html> 