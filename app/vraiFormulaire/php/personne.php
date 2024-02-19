<?php
class Personne {
    public $debutant;
    public $firstname;
    public $id;
    public $password;
    public $genre;
    public $genreS;
    public $name;
    public $birth;

    public function __construct($debutant, $firstname, $id, $password, $genre, $genreS, $name, $birth)
    {
        $this->debutant = $debutant;
        $this->firstname = $firstname;
        $this->id = $id;
        $this->password = $password;
        $this->genre = $genre;
        $this->genreS = $genreS;
        $this->name = $name;
        $this->birth = $birth;
    }

    // Méthode statique pour créer une instance de la classe Personne à partir d'un tableau
    public static function createFromTable(Array $array): Personne
    {
        // Vous devez implémenter le contenu de cette méthode en fonction de la structure attendue du tableau
        // et de la manière dont vous souhaitez créer une instance de la classe Personne.
        // Retourne une nouvelle instance de Personne.
        return new Personne(
            $array['debutant'],
            $array['firstname'],
            $array['id'],
            $array['password'],
            $array['genre'],
            $array['genreS'],
            $array['name'],
            $array['birth']
        );
    }
}
?>
