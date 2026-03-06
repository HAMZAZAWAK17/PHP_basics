<?php

// =======================================
// QUESTION 1
// Afficher les entiers de 1 à 10
// en utilisant une boucle WHILE
// =======================================

$i = 1;

while ($i <= 10) {
    echo $i . " ";
    $i++;
}

echo "<br><br>";


// =======================================
// QUESTION 2
// Refaire le programme précédent
// avec une boucle FOR
// =======================================

for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<br><br>";


// =======================================
// QUESTION 3
// Produire une ligne horizontale
// de 8 étoiles
// =======================================

for ($i = 1; $i <= 8; $i++) {
    echo "*";
}

echo "<br><br>";


// =======================================
// QUESTION 4
// Produire un carré de 8 lignes
// chaque ligne contient 8 étoiles
// =======================================

for ($ligne = 1; $ligne <= 8; $ligne++) {

    for ($colonne = 1; $colonne <= 8; $colonne++) {
        echo "*";
    }

    echo "<br>";
}

echo "<br>";


// =======================================
// QUESTION 5
// Afficher les nombres de 18 à 1
// par lignes de 3 nombres
// =======================================

$nombre = 18;

while ($nombre >= 1) {

    for ($i = 0; $i < 3; $i++) {
        echo $nombre . " ";
        $nombre--;
    }

    echo "<br>";
}

echo "<br>";


// =======================================
// QUESTION 6
// Afficher la forme suivante
// 1
// 2 2
// 3 3 3
// 4 4 4 4
// 5 5 5 5 5
// =======================================

for ($i = 1; $i <= 5; $i++) {

    for ($j = 1; $j <= $i; $j++) {
        echo $i . " ";
    }

    echo "<br>";
}

echo "<br>";


// =======================================
// QUESTION 7
// Afficher un tableau avec
// bonjour1 bonjour2
// bonjour3 bonjour4
// bonjour5 bonjour6
// =======================================

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

