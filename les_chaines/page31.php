<?php
// =============================================
// Activité 5 : Les chaînes de caractères
// =============================================

// Déclaration de la variable v1
$v1 = "Bonjour tout le monde";

echo "=== Activité 5 : Les chaînes de caractères ===" . "<br><br>";
echo "Phrase de départ : <b>" . $v1 . "</b>" . "<br><br>";

// -------------------------------------------------
// 1. Afficher le nombre de caractères de la phrase
// -------------------------------------------------
$nb_caracteres = strlen($v1);
echo "1. Nombre de caractères : " . $nb_caracteres . "<br><br>";

// -------------------------------------------------
// 2. Le nombre de mots dans la phrase
// -------------------------------------------------
$nb_mots = str_word_count($v1);
echo "2. Nombre de mots : " . $nb_mots . "<br><br>";

// -------------------------------------------------
// 3. Remplacer tous les 'o' par 'O'
// -------------------------------------------------
$phrase_O = str_replace("o", "O", $v1);
echo "3. Remplacer 'o' par 'O' : " . $phrase_O . "<br><br>";

// -------------------------------------------------
// 4. Remplacer 'tout' par 'all'
// -------------------------------------------------
$phrase_all = str_replace("tout", "all", $v1);
echo "4. Remplacer 'tout' par 'all' : " . $phrase_all . "<br><br>";

// -------------------------------------------------
// 5. Inverser les caractères avec strrev()
// -------------------------------------------------
$phrase_inversee = strrev($v1);
echo "5. Phrase inversée (strrev) : " . $phrase_inversee . "<br><br>";

// -------------------------------------------------
// 6. Démonstration avec substr()
//    Extraire "tout le monde" (à partir du caractère 8)
// -------------------------------------------------
$sous_chaine = substr($v1, 8);       // Extrait depuis la position 8 jusqu'à la fin
$sous_chaine2 = substr($v1, 0, 7);   // Extrait les 7 premiers caractères
echo "6. Utilisation de substr() :" . "<br>";
echo "   - substr(\$v1, 8)    => " . $sous_chaine . "<br>";
echo "   - substr(\$v1, 0, 7) => " . $sous_chaine2 . "<br>";
