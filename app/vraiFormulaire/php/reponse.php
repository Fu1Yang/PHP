<?php
require_once 'personne.php';

    if (isset($_POST["genre"])
        &&isset($_POST["name"])
        &&isset($_POST["password"])
        &&isset($_POST["firstname"])
        &&isset($_POST["birth"])
        &&isset($_POST["id"])
        &&isset($_POST["genreS"])
        &&isset($_POST["debutant"])) {

        echo "<h1>Bonjour</h1>".strip_tags($_POST["genre"]). " ".strip_tags($_POST["name"])." " .strip_tags($_POST["firstname"]);
        echo "<p>année de naissance ".strip_tags($_POST["birth"])." </p>";
        echo "<p>Ton identifiant et ton mot de passe: ".strip_tags($_POST["id"]). ", ".strip_tags($_POST["password"])."</p>";
        echo "<p>le sexe de  l'utilisateur: ".strip_tags($_POST["genreS"])."</p>";
        echo "<p>le niveau en programmation: ".strip_tags($_POST["debutant"])."</P>";
    }
    else {
        header("location: ../html/index.php");
    }

 

  
?>