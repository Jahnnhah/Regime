<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/style.css") ?>">

</head>
<body>
<form action="<?php echo base_url("UserController/loadChoix")?>" method="post">

    <form>
        <h2 id="info">Nous sommes heureux de vous compter parmi nous.
          <br>Apprenons a vous connaitre :</h2>
      
        
      
        <label for="poids">Poids :</label>
        <input type="text" id="poids" name="poids" placeholder="Votre poids" required>
      
        <label for="taille">Taille :</label>
        <input type="text" id="taille" name="taille" placeholder="Votre taille" required>

        <button type="submit">Envoyer</button>
        <a href="<?php echo base_url("Home/register")?>" class="ca">Retour</a>
        
      </form>
      
</body>
</html>