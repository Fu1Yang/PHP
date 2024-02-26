<?php
$infos = [
    "Une femme a été retrouvée morte chez elle à Vierzon, étranglée",
    "Le restaurant L'Atelier Gourmand à Vierzon propose désormais des desserts à emporter",
    "Le lycée Henri Brisson a ouvert un nouveau BTS qui ravira les entreprises du secteur",
    "Gloria Agblemagnon, lanceuse de poids paralympique, rêve d'or pour les JO 2024",
    "À Vierzon, l'incubateur de start-ups a lancé un nouvel appel à candidatures",
    "Un homme de 26 ans s'est évadé de la prison de Rennes et a finalement été arrêté à Bourges",
    "Un quadragénaire a été condamné dans le Cher pour outrage et menaces à l'encontre de deux gendarmes",
    "Un monument rendant hommage aux animaux morts pendant les guerres a été inauguré à Paris",
    "Une femme de 28 ans est accusée de tentative de meurtre sur son ex-compagnon",
    "Une enquête a été ouverte après la mort d'une femme retrouvée le visage tuméfié",]
;

// Si le formulaire est soumis (le paramètre "numb" est présent dans les données GET)
if (isset($_GET["numb"])) {
    // Récupère la valeur spécifiée par l'utilisateur dans le formulaire
    $numb = $_GET["numb"];
    // Définit un cookie nommé "numb" avec la valeur spécifiée par l'utilisateur,
    // expirant après 1 heure (3600 secondes), accessible à partir de tout le site ("/")
    setcookie("numb", $numb, time() + 3600, "/");
}

?>

<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cookies</title>
</head>
<body>
    <nav>
        <ul>
            <?php
            // Si le cookie "numb" est défini
            if (isset($_COOKIE["numb"])) {
            // Récupère la valeur du cookie "numb"
            $numb = $_COOKIE["numb"];
        
            // Affiche le nombre d'actualités à afficher
            echo "<h1>Nombre d'actualités à afficher : $numb</h1>";

            // Vérifie la validité du nombre d'actualités spécifié
            if ($numb >= 5 && $numb <= count($infos)) {
            // Affiche la liste des actualités en fonction du nombre spécifié
                echo "<ul>";
                for ($i = 0; $i < $numb; $i++) {
                    echo "<li>" . $infos[$i]. "</li>";
                }
                echo "</ul>";
            }
             else {
            // Affiche un message si le nombre spécifié n'est pas valide
                echo "<p>Le nombre d'actualités spécifié n'est pas valide.</p>";
            }
             }
            ?>
        </ul>
    </nav>

    <form action="" method="GET">
    <label for="numb">Combien d'actualités voulez-vous voir affichées</label>
    <input type="number" name="numb" id="numb" min="5" max="<?php echo count($infos); ?>">
    <button type="submit">OK</button>
    </form>
</body>
</html>
