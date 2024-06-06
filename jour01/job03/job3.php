<?php

// Définition de variables de types primitifs
$nombre = 238;
$string = "Bonjour LaPlateforme";
$bool = true;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Variables en PHP</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <!-- Ligne pour chaque variable -->
        <tr>
            <td>Intégrer</td>
            <td>$nombre</td>
            <td><?php echo $nombre;?></td>
        </tr>
        <tr>
            <td>Caractère</td>
            <td>$string</td>
            <td><?php echo $string;?></td>
        </tr>
        <tr>
            <td>Booléen</td>
            <td>$bool</td>
            <td><?php echo $bool? "Vrai" : "Faux";?></td>
        </tr>
    </tbody>
</table>

</body>
</html>