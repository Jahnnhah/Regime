<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/style.css") ?>">
</head>
<body>
<form action="<?php echo base_url("UserController/doChoix")?>" method="post">
        <label for="info">Information à remplir :</label>

        <div style="display:flex;align-items:center;justify-content:space-between;">
            <label for="prendre">Prendre du poids</label>
            <input type="radio" id="prendre" name="choix" value="Augmenter le poids">
        </div>

        <div style="display:flex;align-items:center;justify-content:space-between;">
            <label for="perdre">Perdre du poids</label>
            <input type="radio" id="perdre" name="choix" value="Diminuer le poids">
        </div>
        <div style="display:flex;align-items:center;justify-content:space-between;">
            <label for="suggérer">Suggérer</label>
            <input type="radio" id="suggérer" name="choix" value="Suggestion">
        </div>


    </br>
    </br>
        <button type="submit">Envoyer</button>
        <a href="<?php echo base_url("User/index")?>"class="ca">Already have an account?</a>
      </form>
      
</body>
</html>