<?php

// =============================================
// Exercice 1 : Variables nom et age
// =============================================
$nom = "INESSE";
$age = 6;
echo "Salut $nom. Vous avez $age ans.<br>";

echo "<hr>";

// =============================================
// Exercice 2 : Opérations arithmétiques
// =============================================
$x = 20;
$y = 10;
echo "Addition : $x + $y = " . ($x + $y) . "<br>";
echo "Multiplication : $x * $y = " . ($x * $y) . "<br>";
echo "Division : $x / $y = " . ($x / $y) . "<br>";
echo "Soustraction : $x - $y = " . ($x - $y) . "<br>";

echo "<hr>";

// =============================================
// Exercice 3 : Permutation de deux variables
// =============================================
$a = 5;
$b = 15;
echo "Avant permutation : a = $a, b = $b<br>";

$temp = $a;
$a = $b;
$b = $temp;

echo "Après permutation : a = $a, b = $b<br>";

echo "<hr>";

// =============================================
// Exercice 4 : Le plus grand de trois nombres
// =============================================
$n1 = 3.5;
$n2 = 7.2;
$n3 = 5.1;

if ($n1 >= $n2 && $n1 >= $n3) {
    $max = $n1;
} elseif ($n2 >= $n1 && $n2 >= $n3) {
    $max = $n2;
} else {
    $max = $n3;
}

echo "Les trois nombres : $n1, $n2, $n3<br>";
echo "Le plus grand est : $max<br>";

echo "<hr>";

// =============================================
// Exercice 5 : Informations PHP
// =============================================
echo "Version de PHP : ", PHP_VERSION, " <br>";
echo "Système d'exploitation du serveur : ", PHP_OS, " <br>";
phpinfo();

?>