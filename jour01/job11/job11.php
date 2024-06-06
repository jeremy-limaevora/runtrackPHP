<?php

function calcule($nombre1, $operation, $nombre2) {
    switch ($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            if ($nombre2!= 0) {
                return $nombre1 / $nombre2;
            } else {
                return "Erreur: Division par zéro.";
            }
        case '%':
            return $nombre1 % $nombre2;
        default:
            return "Erreur: Opération non reconnue.";
    }
}

echo calcule(10, '+', 5)."<br>"; 
echo calcule(10, '-', 5)."<br>"; 
echo calcule(10, '*', 5)."<br>"; 
echo calcule(10, '/', 5)."<br>"; 
echo calcule(10, '%', 5)."<br>"; 

?>