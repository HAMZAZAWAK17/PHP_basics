<?php

// ===============================
// QUESTION 1
// Déclarer une variable genre avec une valeur (homme ou femme)
// Si genre = homme afficher "Bonjour Monsieur"
// Sinon afficher "Bonjour Madame"
// ===============================

$genre = "homme";

if ($genre == "homme") {
    echo "Bonjour Monsieur";
} else {
    echo "Bonjour Madame";
}

echo "<br><br>";


// ===============================
// QUESTION 2
// Tester si un nombre est à la fois
// un multiple de 3 et de 5
// ===============================

$nombre = 15;

if ($nombre % 3 == 0 && $nombre % 5 == 0) {
    echo "Le nombre $nombre est un multiple de 3 et de 5";
} else {
    echo "Le nombre $nombre n'est pas un multiple de 3 et de 5";
}

echo "<br><br>";


// ===============================
// QUESTION 3
// Utiliser les variables $age et $ville
// Si la personne vient de Tanger
// et que son âge est entre 21 et 40
// afficher : "Vous êtes le candidat recherché"
// ===============================

$age = 25;
$ville = "Tanger";

if ($ville == "Tanger" && $age >= 21 && $age <= 40) {
    echo "Vous êtes le candidat recherché";
} else {
    echo "Vous ne correspondez pas aux critères";
}

echo "<br><br>";


// ===============================
// QUESTION 4
// Déterminer si une année est bissextile
// Une année est bissextile si :
// divisible par 4 et pas par 100
// ou divisible par 400
// ===============================

$annee = 2024;

if (($annee % 4 == 0 && $annee % 100 != 0) || ($annee % 400 == 0)) {
    echo "L'année $annee est bissextile";
} else {
    echo "L'année $annee n'est pas bissextile";
}

echo "<br><br>";


// ===============================
// QUESTION 5
// Créer une calculatrice simple
// qui prend deux nombres et un opérateur
// (+ , - , * , /)
// ===============================

$a = 10;
$b = 5;
$operateur = "+";

if ($operateur == "+") {
    echo "Résultat : " . ($a + $b);
} 
elseif ($operateur == "-") {
    echo "Résultat : " . ($a - $b);
} 
elseif ($operateur == "*") {
    echo "Résultat : " . ($a * $b);
} 
elseif ($operateur == "/") {
    echo "Résultat : " . ($a / $b);
} 
else {
    echo "Opérateur invalide";
}

?>