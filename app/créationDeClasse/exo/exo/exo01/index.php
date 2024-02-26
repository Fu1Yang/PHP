<?php
//-----------exo1
// $stagiaires = array(
//     array("Nom" => "Dupont", "Prenom" => "Jean"),
//     array("Nom" => "Martin", "Prenom" => "Sophie")
// );

// var_dump($stagiaires);

//------------------FIN Exo1------------------

//---------------exo2

declare(strict_types=1);
require_once("stagiaire.class.php");
require_once("rectangle.class.php");
require_once("garage.class.php");
$stagiaire = new Stagiaire();
$stagiaire->nom="DUPONT";
$stagiaire->prenom = "Martin";

$stagiaire1 = new Stagiaire();
$stagiaire1->nom="YANG";
$stagiaire1->prenom = "Fu";
$stagiaires = [$stagiaire, $stagiaire1];
// var_dump($stagiaires);

//---------------------FIn exo2

//--------------debut exo3
foreach ($stagiaires as $stagiaire) {
    echo $stagiaire->salutation().("<br>");
}

$rectangle = new Rectangle();
$rectangle->longueur=25;
$rectangle->largeur=10;
echo "Le périmetre: ".$rectangle->calculerPerimetre().("<br>");
echo "La surface: ".$rectangle->calculerSurface().("<br>");
echo ($rectangle->estUnLosange())?"c est un losange":"ce n'est pas un losange".("<br>");



$voiture = new Voiture("Toyota", "Camry");
$voiture->voitureModel();








