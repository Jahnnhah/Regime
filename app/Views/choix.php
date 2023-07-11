<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/style2.css") ?>">
</head>
<body>
<form action="<?php echo base_url("UserController/loadProposition")?>" method="post">
        <h2>Information à remplir :</h2>

        <label class="choice">
            <input type="checkbox" id="prendre" name="prendre">
            Prendre du poids
        </label><br>

        <label class="choice">
            <input type="checkbox" id="perdre" name="perdre">
            Perdre du poids
        </label><br>

        <label class="choice">
            <input type="checkbox" id="suggere" name="suggere">
            Suggérer
        </label>


    </br>
    </br>
        <button type="submit">Envoyer</button>
        <a href="<?php echo base_url("UserController/info")?>" class="ca">Retour</a>
      </form>
      
</body>
</html>