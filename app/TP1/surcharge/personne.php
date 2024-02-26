<?php
class Personne {
    public string $nom;
    public string $prenom;
    public int $age;

    public function __construct(string $nom, string $prenom, int $age=45) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        echo "charger";
    }

    public function saluer(string $message = "Bonjour") {
        echo "<pre>";
        echo "{$message}, je m'appelle {$this->prenom} {$this->nom}\n";
    }
    public function getPrenom() {
        return $this->prenom;
    }

    public function __destruct() {
        echo "<p> l'instance vient d'être détruite: $this->prenom</p>";
    }
    public function debugInfo() {
        return ["name"=>$this->name, "firstname"=>$this->prenom];
    }
    public function __call($method, $args){
        if (substr($metho,0,2)==get){
           $ref= new \ReflectionClass(Personne::class);
           return $ref->getAttributes([substr($method,3)]);
        }
        echo "la method à été appelée avec les paametres :";
        foreach ($args as $key => $value) {
            echo   "$key $value";
          }

    }
   
}
?>
