<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/style.css") ?>">

</head>
<body>
<form action="<?php echo base_url("UserController/saveInfo")?>" method="post">

    <form>
        <h2 id="info">Nous sommes heureux de vous compter parmi nous.
          <br>Apprenons a vous connaitre :</h2>
      
        
        <label for="poids">Age :</label>
        <input type="text" id="age" name="age" placeholder="Votre age" required>
        
        <label for="poids">Poids :</label>
        <input type="text" id="poids" name="poids" placeholder="Votre poids" required>
      
        <label for="taille">Taille :</label>
        <input type="text" id="taille" name="taille" placeholder="Votre taille" required>
        <label>Genre</label><br>
               <select name="genre" id="genre">
               <option value="homme">Homme</option>
               <option value="femme">Femme</option>
          </select><br>


        <button type="submit">Envoyer</button>
        <a href="<?php echo base_url("Home/register")?>">Retour</a>
        
      </form>
      
</body>
</html>