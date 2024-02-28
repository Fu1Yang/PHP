<?php
require_once 'livre.php';
class Auteur {
    public $nom;
    private $_origine; 
    private $_livres = [];

    public function __construct($nom, $pOrigine) {
        $this->nom = $nom;
        $this->_origine = $pOrigine;
    }
 

    public function addLivre(Livre $pLivre) {
        $this->_livres[] = $pLivre;
    }

// 

    public function listLivres() {
        foreach ($this->_livres as $pLivre) {
            echo $pLivre->titre . "\n";
        }
    }
}
