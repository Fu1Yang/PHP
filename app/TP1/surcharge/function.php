<?php
function foo(Personne $personne) {
    echo "foo";
    $personne->saluer();
    $unAutre = new Personne("Martin", "DUPONT");
    $unAutre->saluer("Bonjour");
}

?>
