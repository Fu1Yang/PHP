<?php

for ($i = 0; $i <= 16; $i++) {
    $resultat = pow(2, $i);
    echo "2^$i = $resultat<br>";
}

echo "<br>";

$i = 0;
while ($i <= 16) {
    $resultat = pow(2, $i);
    echo "2^$i = $resultat<br>";
    $i++;
}

?>

