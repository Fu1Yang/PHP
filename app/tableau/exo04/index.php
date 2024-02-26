<?php

$individu = array(
    "Nom"=>"Dupont",
    "Prenoms"=>"Martin",
    "Age"=>18,
    "Nationalité"=>"Francais",
);

    foreach ($individu as $key => $value) {
        echo "<h1> ".$key." : ". $value."</h1>" ;
}

?>