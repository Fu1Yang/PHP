<?php

class Voiture {
    public String $marque;
    public String $model;  

    public function __construct(String $marque, String $model) { 
        $this->marque = $marque;
        $this->model = $model;
    }

    public function voitureModel(): void {
        $modelData = [
            "Audi A4 - 190 ch - Date de sortie : 2019",
            "Toyota Camry - 203 ch - Date de sortie : 2018",
            "BMW 3 Series - 255 ch - Date de sortie : 2019",
            "Ford Mustang GT - 450 ch - Date de sortie : 2018",
            "Mercedes-Benz C-Class - 255 ch - Date de sortie : 2020",
            "Tesla Model 3 - Variable (selon la version) - Date de sortie : 2017",
            "Volkswagen Golf GTI - 245 ch - Date de sortie : 2019",
            "Porsche 911 Carrera - 379 ch - Date de sortie : 2019",
            "Chevrolet Corvette Stingray - 490 ch - Date de sortie : 2020",
            "Jaguar F-Type - 296 ch - Date de sortie : 2019",
        ];

        foreach ($modelData as $data) {
            echo $data."<br>" ;
        }
    }
}


