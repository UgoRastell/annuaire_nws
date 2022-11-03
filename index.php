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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Accueil annuaire NWS</title>
</head>
<body>

  <div class="result">
       <div class="result-content">
            <h3>ANNUAIRE<br>Étudiants</h3>
            <a class="btn btn-primary mb-3 mt-2" role="button" href="./formulaire/ajouter.php">Ajouter</a>
            <a class="btn btn-warning mb-3 mt-2" role="button" href="http://localhost/annuaire_nws/search_students.php">Chercher</a>

            
            
            <div class="liste-personne">
              <?php
              $test= new Students();
              $test->getAllStudents();
              ?>
            </div>       
        </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>