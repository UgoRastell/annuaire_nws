<?php
require_once "../models/Database_requete.php";

if(isset($_POST['btn-ajouter']))
{
  
  if(isset($_FILES['image']))
  {
    $img_nom = $_FILES['image']['name']; //récupère le nom de l'image 
    $tmp_nom = $_FILES['image']['tmp_name']; //définire un nom temporaire

    $image = $img_nom;
  
    $deplacer_image = move_uploaded_file($tmp_nom,"../assets/profil_student/".$image) ;
  
    if($deplacer_image)
    {
      //inserer le titre ,la description  et le nom de l'image dans la base de donnée 
      $test= new Students();
      $test->addStudents();

    }else {
      echo 'error';
    }

    

  var_dump($_POST);
  }
  

}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
    <link rel="icon" type="image/x-icon" href="media/favicon_nws.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Ajouter un élève</title>
</head>
<body>
  <div class="container mt-5">
    <form method="POST" action="" enctype="multipart/form-data">
      <div class="form-group mt-2">
        <label for="prenom">Prenom</label>
        <input type="text" class="form-control" name="prenom" id="exampleInputPrenom1" aria-describedby="prenomHelp" placeholder="Prenom">
      </div>
      <div class="form-group mt-2">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" name="nom" id="exampleInputnom1" aria-describedby="nomHelp" placeholder="nom">
      </div>
      <div class="form-group mt-2">
        <label for="nom">Age</label>
        <input type="text" class="form-control" name="age" id="exampleInputnom1" aria-describedby="nomHelp" placeholder="age">
      </div>
      <div class="form-group mt-2">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group mt-2">
        <label for="prenom">Numéro de téléphone</label>
        <input type="text" class="form-control" name="telephone" id="exampleInputPrenom1" aria-describedby="prenomHelp" placeholder="Numéro de téléphone">
      </div>
      <div class="form-group mt-2">
        <label for="exampleInputEmail1">Addresse</label>
        <input type="text" class="form-control" name="adresse" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group mt-2">
        <label for="prenom">Diplôme</label>
        <input type="text" class="form-control" name="diplome" id="exampleInputPrenom1" aria-describedby="prenomHelp" placeholder="Diplôme">
      </div>
      <select class="form-select mt-3" name="specialite"  aria-label="Default select example">
        <option selected>Filiere</option>
        <option value="Développement web">Développement web</option>
        <option value="Communication graphique">Communication graphique</option>
        <option value="Community Management">Community Management</option>
        <option value="Web marketing">Web marketing</option>
      </select>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="genre" id="inlineRadio1" value="Homme">
        <label class="form-check-label" for="inlineRadio1">Homme</label>
      </div>
      <div class="form-check form-check-inline mt-3">
        <input class="form-check-input" type="radio" name="genre" id="inlineRadio2" value="Femme">
        <label class="form-check-label" for="inlineRadio2">Femme</label>
      </div>
        <input class="form-control-file" name="image" type="file" id="formFile">
      <br>
      <input type="submit" class="btn btn-primary mt-3 mb-3" name="btn-modifier" value="Modifier"><br>
      <a class="btn btn-primary" href="../index.php" role="button">ACCUEIL</a>
    </form>
  </div>
  

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>