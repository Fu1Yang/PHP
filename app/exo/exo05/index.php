<?php

$duree = 6700;

///En utilisant floor, on arrondit ce résultat vers le bas pour obtenir le nombre entier d'heures complet
$heures = floor($duree / 3600);
$minutes = floor(($duree % 3600) / 60);
$secondes = $duree % 60;

echo "Durée convertie : $heures h $minutes m $secondes s";
?>
