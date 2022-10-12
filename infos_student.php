<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="text">
        <strong><p class="nomPrenom"> Prénom et nom : <a href=""><?= $row['student_prenom'] . " " . $row['student_nom'] ?></p></a></strong>
        <p class="email"> Adresse mail :  <?= $row['student_email'] ?></p>
        <p class="numeroTelephone">Numéro de télephone : <?= $row['student_numero_telephone'] ?></p>
        </div>
    </div>
</body>
</html>