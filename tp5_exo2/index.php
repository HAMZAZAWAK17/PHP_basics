<?php
class Etudiant {
    public $nom;
    public $prenom;
    public $matricule;
    public $note;

    public function __construct($nom, $prenom, $matricule, $note) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->matricule = $matricule;
        $this->note = $note;
    }

    public function afficherInfos() {
        echo "Matricule: " . $this->matricule . " | " . $this->prenom . " " . $this->nom . " -> Note: " . $this->note . "<br>";
    }
}

// 1. "Saisie" (Initialisation de 4 étudiants)
$classe = [
    new Etudiant("ZAWAK", "Hamza", "EST01", 15),
    new Etudiant("BENANI", "Sara", "EST02", 12),
    new Etudiant("IKKI", "Youssef", "EST03", 18),
    new Etudiant("ALAMI", "Laila", "EST04", 10)
];

// 2. Calculer la somme
$somme = 0;
foreach ($classe as $e) {
    $somme += $e->note;
}

// 3. Calculer la moyenne
$moyenne = $somme / count($classe);

// 4. Compter les notes supérieures à la moyenne
$compteurSuperieur = 0;
foreach ($classe as $e) {
    if ($e->note > $moyenne) {
        $compteurSuperieur++;
    }
}

// 5. Affichage des résultats
echo "<h2>Résultats de la classe</h2>";
echo "Somme des notes : $somme <br>";
echo "Moyenne : $moyenne <br>";
echo "Nombre de notes supérieures à la moyenne : $compteurSuperieur <br><br>";

echo "<h3>Détails des étudiants :</h3>";
foreach ($classe as $e) {
    $e->afficherInfos();
}
?>
