<!DOCTYPE html>
<html>
<head>
    <title>Affichage Paramètre Nombre</title>
</head>
<body>

<?php
// Récupération du paramètre "nombre" depuis la barre d'adresse
if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];

    // Utilisation de echo pour afficher le contenu
    echo "<h2>Contenu avec echo :</h2>";
    echo "Le nombre est : " . $nombre . "<br>";

    // Utilisation de var_dump pour afficher le contenu et le type de données
    echo "<h2>Contenu avec var_dump :</h2>";
    var_dump($nombre);
} else {
    echo "Aucun paramètre 'nombre' spécifié dans la barre d'adresse.";
}
?>

</body>
</html>
