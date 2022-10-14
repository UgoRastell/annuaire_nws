<?php
require_once "./database&requete.php";
require_once "./models/Student.php";

$database = new database('annuaire_nws');
$data = $pdo->query("SELECT * from photo_student inner join student on photo_id = student_id");
var_dump($data);

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
            <h3>ANNUAIRE<br><?=$countStudent[0]['count(*)']?> Étudiants</h3>
            <a href="ajouter.php" class ="btn-blue"><strong>AJOUTER</strong></a>

            <div class="liste-personne">
  
              <?php
              foreach ($result as $row)
              {
                $id = $row['student_id'];
                $student = new Student($row['student_prenom'], $row['student_nom'], $row['student_age'], $row['student_numero_telephone'], $row['student_email'], $row['student_speciality'], $row['student_adresse'], $row['student_genre'], $row['student_adresse']);
                
                
              ?>

                <div class="personne">
                  <div class="photo_student">
                    <img src="./assets/profil_student/<?= $row['photo_directory'] ?>"> 
                  </div>
                  <div class="text">
                    <strong><p class="nomPrenom"> Prénom et nom : <a id="btn-info" href="<?= "infos_student.php?id=".$id ?>"><?= $row['student_prenom']  . " " . $row['student_nom']  ?></p></a></strong>
                    <p class="email"> Adresse mail :  <?= $row['student_email'] ?></p>
                    <p class="numeroTelephone">Numéro de télephone : <?= $row['student_numero_telephone'] ?></p>
                    <hr class="solid">
                  </div>
                </div>

              <?php
              }
              
              $read = $student->readStudent();
              ?>

            </div>
        </div>
  </div>
</body>
</html>