
<?php
class Genre {
    private String $_intitule;
    
    public function __construct(string $pIntitule){
        $this->_intitule = $pIntitule;
    }
  
    public function setGenre(): string{
        return $this->_intitule=$pIntitule;
    }


    public function getGenre(): String{
        return $this->_intitule;
    }
}