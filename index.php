<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Document</title>
</head>
<body>
  <section class="logo">
    <img src="./media/logo_nws.svg" alt="">
  </section>

  <section class="input_add">
    <form method="post" action="" enctype="multipart/form-data">
        <label>Prenom</label>
        <input type="text" name="prenom">
        <label>Nom</label>
        <input type="text" name="nom">
        <label>Mail</label>
        <input type="text" name="mail">
        <label>Numéro de téléphone</label>
        <input type="text" name="numero">
        <input type="submit" value="Ajouter" name="btn-ajouter"/>
        <input type="submit" value="Annuaire" name="btn-annuaire" class="btn-annuaire"/>
        
    </form>
  </section>

</body>
</html>