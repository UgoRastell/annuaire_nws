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
  <div class="result_info">
            <h3>Infos personnelles de</h3>
            <div class="personne_info">
              <?php
              $test= new Students();
              $test->getSoloStudent();
              ?>
            </div>
        </div>
  </div>
</body>
</html>