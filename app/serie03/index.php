<!DOCTYPE html>
<html>
<head>
    <title>Afficher les Nombres en Ordre Reversé</title>
</head>
<body>

<?php
// afficher tous les nombres de n à 1
function afficherLesNombresRebour($n) {
    for ($i = $n; $i >= 1; $i--) {
        echo $i;
    }
}

//la fonction avec n = 10
echo "<h2>Affichage des nombres de 10 à 1 :</h2>";
afficherLesNombresRebour(10);
?>

</body>
</html>
