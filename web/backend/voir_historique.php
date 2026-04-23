<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Historique des passages</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Historique des passages</h1>

  <div class="table-container">
      <table>
          <thead>
              <tr>
                  <th>Date</th>
                  <th>Heure</th>
                  <th>Code Badge</th>
                  <th>Statut</th>
              </tr>
          </thead>
          <tbody>
          <?php
            $dbh = new PDO('mysql:dbname=test;host=localhost;charset=utf8', 'root', '');
            
            $result = $dbh->query("SELECT * FROM passage ORDER BY date DESC, heure_passage DESC");
            
            if($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)){
                    // On formate l'affichage du statut
                    if ($row['valide'] == 1) {
                        $statut_texte = "Autorisé";
                        $statut_class = "valide";
                    } else {
                        $statut_texte = "Refusé";
                        $statut_class = "refuse";
                    }

                    $date_formatee = date("d/m/Y", strtotime($row['date']));
                    if ($row['date'] == "0000-00-00") {
                        $date_formatee = "-";
                    }

                    echo '<tr>';
                    echo '<td>' . $date_formatee . '</td>';
                    echo '<td>' . htmlspecialchars($row['heure_passage']) . '</td>';
                    
                    $code_scan = !empty($row['code_badge_scan']) ? $row['code_badge_scan'] : 'Inconnu';
                    echo '<td class="code-badge-scan">' . htmlspecialchars($code_scan) . '</td>';
                    
                    echo '<td><span class="status ' . $statut_class . '">' . $statut_texte . '</span></td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="4" style="text-align: center;">Aucun passage enregistré.</td></tr>';
            }
          ?>
          </tbody>
      </table>
  </div>

  <div class="retour-accueil">
      <a href="page_web.php" class="btn-retour">Retour à l'accueil</a>
  </div>

</body>
</html>