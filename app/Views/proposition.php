<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Proposition</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/prop.css'); ?>">
</head>
<body>
<form action="<?php echo base_url("UserController/loadPropostion");?>" method="post">
    <h1>Proposition</h1>

    <h2>Régimes</h2>
    <table>
        <tr>
            <th colspan="8">Colonnes 1 à 7</th>
        </tr>
        <tr>
            <td>Lundi</td>
            <td>Mardi</td>
            <td>Mercredi</td>
            <td>Jeudi</td>
            <td>Vendredi</td>
            <td>Samedi</td>
            <td>Dimanche</td>
        </tr>
        <!-- Ajoutez ici les lignes de données du tableau -->
    </table>

    <h2>Activités</h2>
    <table>
        <tr>
            <th colspan="8">Colonnes 1 à 7</th>
        </tr>
        <tr>
            <td>Lundi</td>
            <td>Mardi</td>
            <td>Mercredi</td>
            <td>Jeudi</td>
            <td>Vendredi</td>
            <td>Samedi</td>
            <td>Dimanche</td>
        </tr>
        <!-- Ajoutez ici les lignes de données du tableau -->
    </table>

    <div>
        <button class="btn" onclick="exportToPDF()">Exporter en PDF</button>
    </div>

    <script>
        function exportToPDF() {
            // Code JavaScript pour exporter en PDF
            // Vous pouvez utiliser une bibliothèque comme jsPDF pour créer le PDF
            alert("Exportation en PDF");
        }
    </script>
</body>
</html>
