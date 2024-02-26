<!DOCTYPE html>
<html>
<head>
    <title>Afficher les Nombres</title>
</head>
<body>

<?php
// Fonction pour afficher tous les nombres de 1 à n
function afficherLesNombres($n) {
    for ($i = 1; $i <= $n; $i++) {
        echo $i ;
    }
}

// Utilisation de la fonction avec n = 10
echo "<h2>Affichage des nombres de 1 à 10 :</h2>";
afficherLesNombres(10);
?>

</body>
</html>
