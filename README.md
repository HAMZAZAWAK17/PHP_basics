# Rapport des Travaux Pratiques PHP - 2025

Ce document présente un rapport complet des activités réalisées en PHP, incluant le code source de chaque exercice et le résultat obtenu lors de l'exécution.

---

## Sommaire
1. [Les Instructions de Contrôle](#1-les-instructions-de-contrôle)
2. [Les Structures Répétitives](#2-les-structures-répétitives)
3. [Activité 5 : Manipulation des Tableaux](#3-activité-5--manipulation-des-tableaux)
4. [Activité 6 : Gestion des Mois](#4-activité-6--gestion-des-mois)
5. [Activité 7 : Tableaux Multidimensionnels](#5-activité-7--tableaux-multidimensionnels)

---

## 1. Les Instructions de Contrôle
**Répertoire :** `les_instructions_de_controle`

Ce TP traite de l'utilisation des instructions conditionnelles (`if`, `else`, `elseif`) pour résoudre des problèmes simples comme le test de genre, les multiples, les critères de recrutement, les années bissextiles et une calculatrice basique.

### Code Source
```php
<?php
// QUESTION 1 : Test de genre
$genre = "homme";
if ($genre == "homme") {
    echo "Bonjour Monsieur";
} else {
    echo "Bonjour Madame";
}

echo "<br><br>";

// QUESTION 2 : Multiple de 3 et 5
$nombre = 15;
if ($nombre % 3 == 0 && $nombre % 5 == 0) {
    echo "Le nombre $nombre est un multiple de 3 et de 5";
} else {
    echo "Le nombre $nombre n'est pas un multiple de 3 et de 5";
}

echo "<br><br>";

// QUESTION 3 : Critères de recrutement
$age = 25;
$ville = "Tanger";
if ($ville == "Tanger" && $age >= 21 && $age <= 40) {
    echo "Vous êtes le candidat recherché";
} else {
    echo "Vous ne correspondez pas aux critères";
}

echo "<br><br>";

// QUESTION 4 : Année bissextile
$annee = 2024;
if (($annee % 4 == 0 && $annee % 100 != 0) || ($annee % 400 == 0)) {
    echo "L'année $annee est bissextile";
} else {
    echo "L'année $annee n'est pas bissextile";
}

echo "<br><br>";

// QUESTION 5 : Calculatrice simple
$a = 10;
$b = 5;
$operateur = "+";
if ($operateur == "+") {
    echo "Résultat : " . ($a + $b);
} elseif ($operateur == "-") {
    echo "Résultat : " . ($a - $b);
} elseif ($operateur == "*") {
    echo "Résultat : " . ($a * $b);
} elseif ($operateur == "/") {
    echo "Résultat : " . ($a / $b);
} else {
    echo "Opérateur invalide";
}
?>
```

### Résultat de l'exécution
> Bonjour Monsieur
>
> Le nombre 15 est un multiple de 3 et de 5
>
> Vous êtes le candidat recherché
>
> L'année 2024 est bissextile
>
> Résultat : 15

---

## 2. Les Structures Répétitives
**Répertoire :** `les_structures_repetitives`

Ce TP porte sur les boucles `for` et `while`, ainsi que sur la génération dynamique de tableaux HTML et de pyramides de nombres.

### Code Source (Extrait Principal)
```php
<?php
// QUESTION 1 & 2 : Boucles 1 à 10
for ($i = 1; $i <= 10; $i++) { echo $i . " "; }

// QUESTION 4 : Carré d'étoiles
for ($ligne = 1; $ligne <= 8; $ligne++) {
    for ($colonne = 1; $colonne <= 8; $colonne++) { echo "*"; }
    echo "<br>";
}

// QUESTION 6 : Pyramide de chiffres
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) { echo $i . " "; }
    echo "<br>";
}

// QUESTION 7 : Tableau HTML dynamique
echo "<table border='1'>";
$numero = 1;
for ($ligne = 1; $ligne <= 3; $ligne++) {
    echo "<tr>";
    for ($colonne = 1; $colonne <= 2; $colonne++) {
        echo "<td>bonjour" . $numero . "</td>";
        $numero++;
    }
    echo "</tr>";
}
echo "</table>";
?>
```

### Résultat de l'exécution (Aperçu)
- Affichage des nombres de 1 à 10.
- Génération d'un carré de 8x8 étoiles.
- Génération d'une pyramide (1, 2 2, 3 3 3, etc.).
- Tableau HTML contenant "bonjour1" à "bonjour6".
- Table de Pythagore et tables de multiplication détaillées de 1 à 9.

---

## 3. Activité 5 : Manipulation des Tableaux
**Répertoire :** `activite_5`

Étude des tableaux indexés : création, modification d'éléments, comptage et parcours avec `foreach`.

### Code Source
```php
<?php
// 1. Création du tableau
$logiciels = ["Photoshop", "Illustrator", "Adobe premier", "PyCharm", "Sketchup"];

// 2. Modification de la première case
$logiciels[0] = "CS4";

// 3. Compter les éléments
$nombre = count($logiciels);

// 4. Affichage avec foreach
foreach ($logiciels as $nom) {
    echo "<li>$nom</li>";
}
?>
```

### Résultat de l'exécution
- **1. Création** : Tableau initialisé avec 5 logiciels.
- **2. Modification** : "Photoshop" est devenu "CS4".
- **3. Nombre** : 5 logiciels.
- **4. Liste générée** : CS4, Illustrator, Adobe premier, PyCharm, Sketchup.

---

## 4. Activité 6 : Gestion des Mois
**Répertoire :** `activite_6`

Utilisation d'un tableau pour stocker les mois de l'année, récupération de valeurs par index et correction de données.

### Code Source
```php
<?php
$mois = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];

echo "Valeur de la troisième case (index 2) : " . $mois[2];
echo "Valeur à l'index 5 (6ème mois) : " . $mois[5];

// Correction d'orthographe
$mois[7] = "août";
?>
```

### Résultat de l'exécution
- **Index 2** : mars
- **Index 5** : juin
- **Correction** : "aout" est devenu "août".

---

## 5. Activité 7 : Tableaux Multidimensionnels
**Répertoire :** `activite_7`

Manipulation de tableaux associatifs et multidimensionnels pour stocker des informations complexes (Nom, Prénom, Ville, Âge).

### Code Source
```php
<?php
$personnes = [
    "Zawak"   => ["Hamza", "Casablanca", 21],
    "Alami"   => ["Sami", "Rabat", 25],
    "Benani"  => ["Sara", "Tanger", 22],
    "Idrissi" => ["Karim", "Marrakech", 28]
];

// Lecture avec FOREACH
foreach ($personnes as $nom => $infos) {
    echo "$nom : $infos[0] ($infos[1], $infos[2] ans)";
}
?>
```

### Résultat de l'exécution
- **Zawak** : Hamza habitant à Casablanca (21 ans)
- **Alami** : Sami habitant à Rabat (25 ans)
- **Benani** : Sara habitant à Tanger (22 ans)
- **Idrissi** : Karim habitant à Marrakech (28 ans)

---

*Rapport généré automatiquement le 07 Mars 2026.*
