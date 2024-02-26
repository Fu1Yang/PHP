<?php
    $tableauNombre = [0, 1, 2, 3, 4, 5, 6];

   $sum = array_sum($tableauNombre);      //array_sum() retourne la somme des valeurs du tableau array. 
   echo "la somme est de:". $sum ."<br>";

   $lentDeTab = count($tableauNombre); // renvoie le nombre d'index du tableau
    
    echo "le nombre d'index du tableau: " .$lentDeTab."<br>";
      
    $moyenne = $sum / $lentDeTab;
    echo "La moyenne de note est de: ".$moyenne."<br>";



 
	foreach ($tableauNombre as $key => $value) {
		$variance[] = pow(($value - $moyenne),2);
	}
 
	$ectype = round(sqrt(round(array_sum($variance)/(count($tableauNombre) - 1),3)),3);
 
	echo "l'ecart type est de : " .$ectype;








    
//array_sum($variance): Cette fonction calcule la somme de tous les éléments dans le tableau $variance.

// (count($sample) - 1): count($sample) donne le nombre d’éléments dans le tableau $sample. On soustrait 1 de ce nombre.

// array_sum($variance)/(count($sample) - 1): On divise la somme des variances par le nombre d’éléments dans l’échantillon moins un. C’est une étape dans le calcul de la variance d’un échantillon.

// round( ..., 3): Cette fonction arrondit le résultat à trois chiffres après la virgule.

// sqrt( ... ): Cette fonction calcule la racine carrée du résultat précédent. C’est une étape dans le calcul de l’écart-type.

// round(sqrt( ... ), 3): Enfin, on arrondit le résultat final à trois chiffres après la virgule.
// Donc, $ectype est l’écart-type arrondi à trois chiffres après la virgule de l’échantillon donné par le tableau $variance. 
// L’écart-type est une mesure de la dispersion des valeurs dans un ensemble de données. Plus l’écart-type est grand, plus les valeurs sont dispersées. 
// Plus il est petit, plus les valeurs sont proches de la moyenne.


    

?>
