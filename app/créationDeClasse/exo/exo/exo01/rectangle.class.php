<?php

class Rectangle {
    public int $longueur;
    public int $largeur;

    public function calculerPerimetre(): int {
        return 2 * ($this->longueur + $this->largeur);
    }
    public function calculerSurface(): int {
        return  $this->longueur * $this->largeur;
    }
    public function estUnLosange(): int {
        if ($this->longueur === $this->largeur) {
            return true;
        }
        else {
            return false;
        }
    }

}



?>