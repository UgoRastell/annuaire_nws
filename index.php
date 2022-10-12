<?php
require_once './database.php';
$pdo = getPDO();

$sql = "SELECT * from photo_student inner join student on photo_id = student_id";

$query = $pdo->prepare($sql);

$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

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
  <div class="logo">
    <img src="./assets/media/logo_nws.svg" alt="">
</div>

  <div class="result">
       <div class="result-content">
            <h3>ANNUAIRE</h3>
            <a href="">AJOUTER</a>
            <div class="liste-personne">

              <?php
              foreach ($result as $row)
              {
              ?>

                <div class="personne">
                  <div class="photo_student">
                                        <img src="./assets/profil_student/<?= $row['photo_directory'] ?>" width='50' height='80' alt=> 
                                </div>
                  <div class="text">
                    <strong><p class="nomPrenom"> Prénom et nom : <a href=""><?= $row['student_prenom'] . " " . $row['student_nom'] ?></p></a></strong>
                    <p class="email"> Adresse mail :  <?= $row['student_email'] ?></p>
                    <p class="numeroTelephone">Numéro de télephone : <?= $row['student_numero_telephone'] ?></p>
                    <hr class="solid">
                  </div>
                </div>

              <?php
              }
              ?>

            </div>
        </div>
  </div>
</body>
</html>