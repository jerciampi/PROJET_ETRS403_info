<head>
  <meta charset="utf-8">
  <title>Backend : ajouter une balade</title>
  <link rel="stylesheet" href="">
</head>







<main>
  <h2>Voici les badges enregistrés</h2>

  <div id ="balades">
  <?php
	$dbh = new PDO('mysql:dbname=test;host=localhost;charset=utf8', 'root', '');
	
	$result = $dbh->query("SELECT * FROM codebadge1");
	
	while ($row = $result->fetch(PDO::FETCH_ASSOC)){
    echo '<div class ="balade-item">'.$row['id'].' - '.$row['code_badge'].' - '.$row['nom_badge'].'<br>';
		
	}
  ?>
  </div>
</main>

<div class="retour-accueil">
    <a href="page_web.php" class="btn-retour">Retour à l'accueil</a>
</div>