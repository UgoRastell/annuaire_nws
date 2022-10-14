<?php
require_once "./models/Database_requete.php";

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
    <link rel="icon" type="image/x-icon" href="media/favicon_nws.ico">
    <title>Accueil annuaire NWS</title>
</head>
<body>
  <div class="result">
       <div class="result-content">
            <h3>ANNUAIRE<br>Étudiants</h3>
            <a href="connexion.php" class ="btn-blue"><strong>Modifier</strong></a>
            <div class="liste-personne">
              
            <?php
            $test= new Students();
            $test->getAllStudents();
            ?>

            </div>
        </div>
  </div>
</body>
</html>