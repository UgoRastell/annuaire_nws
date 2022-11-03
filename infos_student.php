<?php
require_once "./models/Database_requete.php";
$id= $_REQUEST['id'];
if(isset($_POST['btn-supp'])) 
{
  echo '<script></script>';
  $test= new Students();
  $test->deleteStudents();
}else {
  
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Accueil annuaire NWS</title>
</head>
<body>
  <nav class="navbar bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php">Accueil</a>
    </div>
  </nav>

  <?php
  $test= new Students();
  $test->getSoloStudent();
  ?>
  <br>
  <form method="post" action="" enctype="multipart/form-data" onsubmit="return confirm('êtes vous sûr de vouloir supprimer cet item?');">
    <input type="submit" class="btn btn-danger mt-3 mb-3" name="btn-supp" value="Supprimer">
    <a class="btn btn-warning" role="button" href="http://localhost/annuaire_nws/formulaire/modifier.php?id=<?=$id?>">Modfier</a>

  </form>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>