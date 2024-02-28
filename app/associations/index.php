
<?php


require_once 'pays.php';
require_once 'genre.php';
require_once 'auteur.php';
require_once 'livre.php';

// instances de Pays
$pays1 = new Pays("France");
$pays2 = new Pays("États-Unis");

// instances de Genre
$genre1 = new Genre("Roman");
$genre2 = new Genre("Science Fiction");

// instances d'Auteur avec un pays attribué
$auteur1 = new Auteur("Victor Hugo", $pays1);
$auteur2 = new Auteur("J.K. Rowling", $pays2);

// instances de Livre avec un genre et un auteur
$livre1 = new Livre("Les Misérables", $auteur1, $genre1);
$livre2 = new Livre("Harry Potter", $auteur2, $genre2);

// Utiliser  méthodes pour ajouter des éléments aux listes
$auteur1->addLivre($livre1);
$auteur2->addLivre($livre2);

$pays1->addAuteur($auteur1);
$pays2->addAuteur($auteur2);


// Test du code
echo "Livres de Victor Hugo: <br>";
$auteur1->listLivres();


echo "\nAuteurs en France: <br>";
$pays1->listAuteurs();
echo "<br>";
echo "auteur en ".$genre2->getGenre()."<br>";
$auteur2->listLivres();
$pays2->listAuteurs();


