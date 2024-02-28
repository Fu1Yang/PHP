
<?php

    class Livre {
        public $titre;
        private $_auteur;
        private $_genre = [];
    
        public function __construct($pTitre, $pAuteur) {
            $this->titre = $pTitre;
            $this->_auteur = $pAuteur;
       
        }
       
        public function addGenre(Genre $genre) {
            $this->_genre[] = $genre;
        }
 
    public function setTitre($pTitre){
        return $this->titre=$pTitre;
    }
    public function setDateSortie($pDateSortie){
        return $this->_dateSortie=$pDateSortie;
    }
 
    public function getTitre():String {
        return $this->titre;
    }

}