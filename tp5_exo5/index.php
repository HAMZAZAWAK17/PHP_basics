<?php
class CompteBancaire {
    // Attributs
    public $numeroCompte;
    public $nom;
    public $solde;

    // Constructeur d'initialisation
    public function __construct($num, $nom, $solde) {
        $this->numeroCompte = $num;
        $this->nom = $nom;
        $this->solde = $solde;
    }

    // Méthode pour verser
    public function Versement($montant) {
        $this->solde += $montant;
        echo "Versement de $montant $ versé vers le compte $this->numeroCompte <br>";
    }

    // Méthode pour retirer
    public function Retrait($montant) {
        if ($this->solde >= $montant) {
            $this->solde -= $montant;
            echo "Retrait de $montant $ effectué du compte $this->numeroCompte <br>";
        } else {
            echo "Solde insuffisant pour un retrait de $montant $ <br>";
        }
    }

    // Méthode pour les Agios (intérêts négatifs de 5%)
    public function Agios() {
        $montantAgio = $this->solde * 0.05;
        $this->solde -= $montantAgio;
        echo "Application des Agios (5%) : $montantAgio $ débité <br>";
    }

    // Méthode pour afficher le compte
    public function afficher() {
        echo "<b>Informations Compte :</b><br>";
        echo "Numéro de Compte : " . $this->numeroCompte . "<br>";
        echo "Propriétaire : " . $this->nom . "<br>";
        echo "Solde Actuel : " . $this->solde . " $<br><br>";
    }
}

// --- Test du programme ---
$monCompte = new CompteBancaire(998877, "Hamza Zawak", 5000);

// Affichage initial
$monCompte->afficher();

// Versement de 1000
$monCompte->Versement(1000);

// Retrait de 2000
$monCompte->Retrait(2000);

// Agios de 5%
$monCompte->Agios();

// Affichage final
$monCompte->afficher();
?>
