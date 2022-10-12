<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css">
    <link rel="icon" type="image/x-icon" href="media/favicon_nws.ico">
    <title>Ajouter un élève</title>
</head>
<body>
  <section class="input_add">
    <form method="post" action="" enctype="multipart/form-data">
      <div class="message">
      </div>
        <label>Prenom</label>
        <input type="text" name="prenom">
        <label>Nom</label>
        <input type="text" name="nom">
        <label>Mail</label>
        <input type="text" name="mail">
        <label>Numéro de téléphone</label>
        <input type="text" name="numero">
        <label>Diplome</label>
        <input type="text" name="diplome">
        <label>Genre</label>
        <input type="radio" name="genre" value="TEST">
        <label>Spécialités</label>
        <select name="speciality" id="">
          <option value=""></option>
        </select>
        <input type="submit" value="Ajouter" name="btn-ajouter"/>
        <a class="btn-liste-prod" href="action.php">Aller voir l'annuaire</a>
    </form>
  </section>
</body>
</html>

