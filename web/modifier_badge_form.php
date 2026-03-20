<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Backend : ajouter une balade - formulaire</title>
  <link rel="stylesheet" href="">
</head>







<body>

  <h1>Choisir la balade à modifier</h1>
  
  <form method="POST" action="modifier_balade.php" enctype="multipart/form-data">

  <p><label for="id_balade">Balade a supprimer :</label>
  <select name="id_balade">
    <?php
    $dbh = new PDO('mysql:dbname=ciampij;host=localhost;charset=utf8', 'root', '');
  
    $result = $dbh->query("SELECT * FROM balade");
    
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['id_balade'] . '">' . $row['nom_balade'] . '</option>';
    }
    ?>
</select>
<p>
  
<h1>Modifier la balade choisie</h1>
  <p>
    <label for="nom_balade">Nom de la balade :</label>
	<input type="text" name="nom_balade">
  </p>

  <p>
    <label for="description">Description :</label>
	<input type="text" name="description">
  </p>

  <p>
    <label for="lieux_depart">Lieux de départ :</label>
  <input type="text" name="lieux_depart"> 
  </p>

  <p><label for="id_type_sortie">Type de sortie :</label>
  <select name="id_type_sortie">
    <?php
    $dbh = new PDO('mysql:dbname=ciampij;host=localhost;charset=utf8', 'root', '');
  
    $result = $dbh->query("SELECT * FROM type_de_sortie");
    
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['id_type_sortie'] . '">' . $row['nom_sortie'] . '</option>';
    }
    ?>
</select>
<p>

  
  <p>
    <label for="date_real">Date :</label>
	<input type="date" name="date_real">
  </p>

  <p><label for="id_chien">Restrictions pour les chiens :</label>
  <select name="id_chien">
    <?php
    $dbh = new PDO('mysql:dbname=ciampij;host=localhost;charset=utf8', 'root', '');
  
    $result = $dbh->query("SELECT * FROM chien");
    
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['id_chien'] . '">' . $row['nom_chien_restric'] . '</option>';
    }
    ?>
</select>
<p>

  <p>
    <label for="distance">Distance :</label>
  <input type="text" name="distance"> 
  </p>

  <p>
    <label for="altitude_max">Altitude_max :</label>
  <input type="text" name="altitude_max"> 
  </p>

  <p>
    <label for="denivele">Dénivelé :</label>
  <input type="text" name="denivele"> 
  </p>

  <p>
    <label for="duree">Durée :</label>
  <input type="text" name="duree"> 
  </p>




  <p>
    <label for="trace_gpx">Trace GPX :</label>
	<input type="text" name="trace_gpx">
  </p>
  

<p><label for="id_difficulte">Difficulté :</label>
  <select name="id_difficulte">
    <?php
    $dbh = new PDO('mysql:dbname=ciampij;host=localhost;charset=utf8', 'root', '');
  
    $result = $dbh->query("SELECT * FROM difficulte");
    
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<option value="' . $row['id_difficulte'] . '">' . $row['type_difficulte'] . '</option>';
    }
    ?>
</select>
<p>

<p>
    <label for="photos_sortie">Photo de sortie :</label>
	<input type="text" name="photos_sortie">
  </p>

  
  <p>
	<input type="submit" value="Ajouter une balade">
  </p>

</form>

<div class="retour-accueil">
    <a href="page_acceuil.php" class="btn-retour">Retour à l'accueil</a>
</div>
  
  
  
</body>