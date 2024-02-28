<?php
class Pays {
    public $nom;
    private $_auteurs = [];

    public function __construct($pNom) {
        $this->nom = $pNom;
    }

    public function addAuteur(Auteur $auteur) {
        $this->_auteurs[] = $auteur;
    }

//  

    public function listAuteurs() {
        foreach ($this->_auteurs as $auteur) {
            echo $auteur->nom . "\n";
        }
    }
}
