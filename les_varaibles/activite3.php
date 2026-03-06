<?php

// =============================================
// Exercice 1 : Affectation par référence (&)
// =============================================

$x = "PostgreSQL";   // $x vaut "PostgreSQL"
$y = "MySQL";        // $y vaut "MySQL"
$z = &$x;            // $z pointe vers $x (référence)
$x = "PHP 8";        // on change $x => $z change aussi !
$y = &$x;            // $y pointe aussi vers $x maintenant

echo "<h2>Exercice 1 : Affectation par référence</h2>";
echo "x = $x <br>";   // affiche : PHP 8
echo "y = $y <br>";   // affiche : PHP 8 (car $y = &$x)
echo "z = $z <br>";   // affiche : PHP 8 (car $z = &$x)

echo "<hr>";

// =============================================
// Exercice 2 : Opérateurs d'incrémentation
// =============================================

$x = 10;
$y = 20;

echo "<h2>Exercice 2 : Incrémentation (++ et --)</h2>";

echo "x au départ = $x <br>";
echo "y au départ = $y <br>";

// $z = ++$x + (++$y)
// ++$x => $x devient 11 AVANT le calcul
// ++$y => $y devient 21 AVANT le calcul
// $z = 11 + 21 = 32
$z = ++$x + (++$y);

echo "<br>Après : z = ++x + (++y)<br>";
echo "x = $x <br>";   // 11
echo "y = $y <br>";   // 21
echo "z = $z <br>";   // 32

// $l = $x+++ ($y++)
// $x+++ => utilise $x=11 PUIS $x devient 12
// $y++  => utilise $y=21 PUIS $y devient 22
// $l = 11 + 21 = 32
$l = $x++ + ($y++);

echo "<br>Après : l = x++ + (y++)<br>";
echo "l = $l <br>";   // 32 (valeurs AVANT incrémentation)
echo "x = $x <br>";   // 12 (incrémenté après)
echo "y = $y <br>";   // 22 (incrémenté après)

// ++$x => $x devient 13
// $y++ => affiche $y=22 puis $y devient 23
echo "<br>echo ++x; <br>";
echo ++$x;             // affiche 13
echo "<br>echo y++; <br>";
echo $y++;             // affiche 22
echo "<br>x final = $x, y final = $y <br>"; // x=13, y=23

?>
