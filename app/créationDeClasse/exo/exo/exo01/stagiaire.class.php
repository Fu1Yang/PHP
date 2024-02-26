<?php
// class stagiaire {
//     public String $prenom;
//     public String $nom;
// }
 ////-----------------------FIN exo2



 ////------------debut ex03


 class Stagiaire {

    public String $prenom;
    public String $nom;
    public function salutation():String {
        return "Je m'appelle $this->prenom  $this->nom";
    }

 }


?>