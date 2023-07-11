<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Calcul de l'IMC</title>
</head>
<body>
    <h1>Calcul de l'IMC</h1>
    <form action="<?= site_url('imc/calculate') ?>" method="post">
        <label for="weight">Poids (kg):</label>
        <input type="text" name="weight" id="weight" required><br>

        <label for="height">Taille (cm):</label>
        <input type="text" name="height" id="height" required><br>

        <button type="submit">Calculer</button>
    </form>
</body>
</html>
