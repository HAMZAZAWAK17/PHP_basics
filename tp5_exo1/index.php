<?php
// Classe Voiture pour l'Exercice 1 du TP5
class Voiture {
    // Attributs
    public $code;
    public $marque;
    public $puissance;
    public $kilometrage;

    // Constructeur pour initialiser les données
    public function __construct($code, $marque, $puissance, $kilometrage) {
        $this->code = $code;
        $this->marque = $marque;
        $this->puissance = $puissance;
        $this->kilometrage = $kilometrage;
    }

    // Méthode pour modifier la puissance
    public function mod_puiss($nouvelle_puissance) {
        $this->puissance = $nouvelle_puissance;
    }

    // Méthode pour modifier le kilométrage
    public function mod_kilo($nouveau_kilometrage) {
        $this->kilometrage = $nouveau_kilometrage;
    }

    // Méthode pour afficher les informations
    public function afficher() {
        echo "--- Infos Voiture ---<br>";
        echo "Code: " . $this->code . "<br>";
        echo "Marque: " . $this->marque . "<br>";
        echo "Puissance: " . $this->puissance . " CV<br>";
        echo "Kilométrage: " . $this->kilometrage . " km<br><br>";
    }
}

// Création de 3 instances (objets)
$v1 = new Voiture("V001", "Toyota Corolla", 120, 15000);
$v2 = new Voiture("V002", "Dacia Duster", 110, 50000);
$v3 = new Voiture("V003", "Mercedes G-Class", 585, 0);

// Modification de quelques valeurs pour tester
$v1->mod_puiss(125);
$v2->mod_kilo(55000);

// Affichage des trois voitures
$v1->afficher();
$v2->afficher();
$v3->afficher();
?>
