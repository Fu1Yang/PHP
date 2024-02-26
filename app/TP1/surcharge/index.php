<?php
include_once 'function.php';
include_once 'personne.php';

$prof = new Personne('Thierry', 'BRU');
$prof->saluer("Bonyour");

foo($prof);
echo "<pre>";
var_dump($prof);

echo $prof->getPrenom();

?>
