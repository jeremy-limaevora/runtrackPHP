<?php

for ($i = 0; $i <= 100; $i++) {
    // Vérifie si le nombre est entre 0 et 20
    if ($i >= 0 && $i <= 20) {
        // Écrit le nombre en italique
        echo '<i>'.$i.'</i><br>';
    }
    // Vérifie si le nombre est compris entre 25 et 50
    elseif ($i >= 25 && $i <= 50) {
        // Souligne le nombre
        echo '<u>'.$i.'</u><br>';
    }
    // Remplace 42 par "La Plateforme_" sans modification
    elseif ($i == 42) {
        echo 'La Plateforme_<br>';
    }
    // Pour tous les autres nombres
    else {
        echo $i.'<br>';
    }
}
?>

