<?php
require_once './database&requete.php';
require_once './models/Student.php';

$id=$_REQUEST['id'];

foreach ($result as $row)
{
  $prenom = $row['student_prenom'];
  $nom = $row['student_nom'];
  $numero_telephone = $row['student_numero_telephone'];
  $age = $row['student_age'];
  $adresse = $row['student_adresse'];
  $speciality = $row['student_speciality'];
  $mail = $row['student_email'];
  $genre = $row['student_genre'];


  $student = new Student($prenom, $nom, $age, $numero_telephone, $mail, $speciality, $adresse, $genre, $adresse);
  $read = $student->readStudent();
}

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
                <div class="text">
                  <strong><p class="nomPrenom"> Prénom et nom : <?= $prenom. " " . $nom ?></p></strong>
                  <p class="adresse">Âge : <?= $age?></p>
                  <p class="age"> Adresse mail :  <?= $mail ?></p>
                  <p class="email"> Adresse :  <?= $adresse ?></p>
                  <p class="numeroTelephone">Numéro de télephone : <?= $numero_telephone ?></p>
                  <p class="speciality">Spécialité voulus: <?= $speciality?></p>
                </div>
            </div>
        </div>
  </div>
</body>
</html>