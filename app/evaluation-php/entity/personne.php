<?php
/**
 * FICHIER A COMPLETER DANS LES ESPACES INDIQUES (ET PAS AILLEURS ! ! !)
 * 
 */
class Personne
{
    public string $nom;
    public string $prenom;
    public DateTime $date; // Utilisation de DateTime au lieu de DateTimeImmutable
    public string $resume;

    public function __construct(string $prenom, string $nom, DateTime $date, string $resume)
    {
        $this->prenom = $prenom;
        $this->nom = strtoupper($nom);
        $this->date = $date;
        $this->resume = $resume;
    }

    public static function create($pJson)
    {
        $object = json_decode($pJson);
        return new Personne(
            $object->prenom,
            $object->nom,
            DateTime::createFromFormat('Y-m-d', $object->date), // Utilisation de DateTime au lieu de DateTimeImmutable
            $object->resume
        );
    }
}
