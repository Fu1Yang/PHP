<?php
// Fonction pour afficher les nombres pairs de 2 à n
function afficherNombresPairs($n) {
    for ($i = 2; $i <= $n; $i += 2) {
        echo $i;
        if ($i < $n - 1) {
            echo "-";
        }
    }
}

// Utilisation de la fonction avec n = 20
afficherNombresPairs(20);
?>
