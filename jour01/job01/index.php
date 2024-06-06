<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

// Création d'une variable contenant "LaPlateforme"
$plateforme = "LaPlateforme";
echo $plateforme; // Affiche "LaPlateforme"

// Création de deux autres variables contenant "Vive" et "!"
$vive = "Vive";
$exclamation = "!";

// Concaténation des variables pour afficher "Vive LaPlateforme!"
echo $vive. ' '. $plateforme. ' '. $exclamation; // Affiche "Vive LaPlateforme!"

// Création d'une variable contenant le chiffre 6
$nombre = 6;
echo $nombre; // Affiche "6"

// Addition de 4 à la variable et affichage du résultat
$nombre += 4;
echo $nombre; // Affiche "10"

// Création d'une dernière variable et affectation de "true"
$bool = true;
echo $bool? 'true' : 'false'; // Affiche "true"

// Affectation de "false" à la variable et affichage du résultat
$bool = false;
echo $bool? 'true' : 'false'; // Affiche "false"
?>

</body>
</html>
