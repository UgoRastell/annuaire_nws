<?php
require_once './database.php';
$id=$_REQUEST['id'];
echo $id;
$pdo = getPDO();

$sql = "SELECT * from student WHERE student_id =$id";

$query = $pdo->prepare($sql);

$query->execute();

$row = $query->fetchAll(PDO::FETCH_ASSOC);

foreach ($row as $result)
{
  $prenom = $result['student_prenom'];
  $nom = $result['student_nom'];
  $mail = $result['student_email'];
  $numero_telephone = $result['student_numero_telephone'];
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
  <div class="logo">
    <img src="./assets/media/logo_nws.svg" alt="">
</div>

  <div class="result_info">
            <h3>Infos personnelles de</h3>
            <div class="personne_info">
                <div class="text">
                  <strong><p class="nomPrenom"> Prénom et nom : <?= $prenom . " " . $nom ?></p></strong>
                  <p class="email"> Adresse mail :  <?= $mail ?></p>
                  <p class="numeroTelephone">Numéro de télephone : <?= $numero_telephone ?></p>
                </div>
            </div>
        </div>
  </div>
</body>
</html>