<?php
$array = [
    "The Shawshank Redemption" => "Frank Darabont",
    "The Godfather" => "Francis Ford Coppola",
    "The Dark Knight" => "Christopher Nolan",
    "the Lord of the Ring: The Return of the king" => " Peter Jackson",
    "Pulp Fiction" => "Quentin Tarantino",
];

foreach ($array as $key => $value) {
   echo "<h1>".$key." : ".$value."</h1>";
    }




    $films = array(
        array("Titre" => "The Shawshank Redemption", "Réalisateur" => "Frank Darabont", "Année" => 1994, "Note" => 9.2),
        array("Titre" => "The Godfather", "Réalisateur" => "Francis Ford Coppola", "Année" => 1972, "Note" => 9.1),
        array("Titre" => "The Dark Knight", "Réalisateur" => "Christopher Nolan", "Année" => 2008, "Note" => 9.0),
        array("Titre" => "the Lord of the Ring: The Return of the king", "Réalisateur" => "Peter Jackson", "Année" => 2003, "Note" => 8.9),
        array("Titre" => "Pulp Fiction", "Réalisateur" => "Quentin Tarantino", "Année" => 1994, "Note" => 8.9)
    );
    
    foreach ($films as $film) {
        echo "<h4> Titre: " . $film["Titre"]." </h4>" . "<br>";
        echo "<p> Réalisateur: " . $film["Réalisateur"]." </p>" . "<br>";
        echo "<p> Année: " . $film["Année"]." </p>" . "<br>";
        echo "<p> Note: " . $film["Note"]." </p> " . "<br><br>";
    } 
    

?>