<?php
require_once "../models/Database_requete.php";

if(isset($_POST['btn-ajouter']))
{
  
  if(isset($_FILES['image']) AND !empty(isset($_POST['prenom'])) AND !empty(isset($_POST['genre'])) AND !empty(isset($_POST['email'])))
  {
  
    $img_nom = $_FILES['image']['name']; //récupère le nom de l'image 
    $tmp_nom = $_FILES['image']['tmp_name'];

    $image = $img_nom;
  
    $deplacer_image = move_uploaded_file($tmp_nom,"../assets/profil_student/".$image);
  
    if($deplacer_image)
    {
      //inserer le titre ,la description  et le nom de l'image dans la base de donnée 
      $test= new Students();
      $test->addStudents();
    }else{
      
    }
  
  }else 
  {
    echo '<script type="text/javascript">';
    echo ' alert("N\'oubliez pas de mettre un prenom, une image, un sexe et une adresse mail pour pouvoir valider")';
    echo '</script>';
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
<nav class="navbar bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">Accueil</a>
  </div>
</nav>

  <div class="container mt-4">
    <h2>Ajouter un Étudiant</h2>
    <form method="POST" action="" enctype="multipart/form-data">
      <div class="row mt-2">
        <div class="col">
        <label>Prenom</label>
          <input type="text" name="prenom" class="form-control" placeholder="Prenom" name="email">
        </div>
        <div class="col">
          <label>Nom</label>
          <input type="text" name="nom" class="form-control" placeholder="Nom">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label class="mt-2">Age</label>
          <input type="text" class="form-control" name="age" placeholder="age" name="email">
        </div>
        <div class="col">
          <label class="mt-2">Numéro de téléphone</label>
          <input type="text" class="form-control" placeholder="Numéro de téléphone" name="telephone">
        </div>
      </div>
      <label class="mt-2">Adresse</label>
      <input type="text" class="form-control" name="adresse" placeholder="Adresse">
      <label class="mt-2">Email</label>
      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <div class="row">
        <div class="col">
          <label class="mt-2">Diplome</label>
          <input type="text" class="form-control" name="diplome" placeholder="Diplôme">
        </div>
        <div class="col">
        <label class="mt-2">Filiere</label>
        <select class="form-select" name="specialite"  aria-label="Default select example">
          <option selected>Ne sais pas</option>
          <option value="Développement web">Développement web</option>
          <option value="Communication graphique">Communication graphique</option>
          <option value="Community Management">Community Management</option>
          <option value="Web marketing">Web marketing</option>
        </select>
        </div>
      </div>
      <div class="form-check form-check-inline mt-3">
        <input class="form-check-input" type="radio" name="genre" id="inlineRadio1" value="Homme">
        <label class="form-check-label" for="inlineRadio1">Homme</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="genre" id="inlineRadio2" value="Femme">
        <label class="form-check-label" for="inlineRadio2">Femme</label>
      </div><br>
      <label>Photo de l'etudiant | </label>
      <input class="form-file mt-2" type="file" name="image"><br>
      <input class="btn btn-primary mt-3" type="submit" name="btn-ajouter">
    </form>
  </div>

  

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>

