<?php
// =============================================
// Activité 4 : Les dates
// =============================================

echo "=== Activité 4 : Les dates ===" . "<br><br>";

// -------------------------------------------------
// 1. Afficher l'année courante
// -------------------------------------------------
$annee = date("Y");
echo "1. Année courante : " . $annee . "<br><br>";

// -------------------------------------------------
// 2. Afficher la date courante sous deux formats
// -------------------------------------------------
$date_YMD = date("Y/m/d");   // Format : Année/Mois/Jour
$date_DYM = date("d-Y-m");   // Format : Jour-Année-Mois

echo "2. Date au format Y/M/D : " . $date_YMD . "<br>";
echo "   Date au format D-Y-M : " . $date_DYM . "<br><br>";

// -------------------------------------------------
// 3. Afficher l'heure actuelle
// -------------------------------------------------
$heure = date("H:i:s");   // Heures:Minutes:Secondes
echo "3. Heure actuelle : " . $heure . "<br><br>";

// -------------------------------------------------
// 4. Nombre de semaines entre le 4/12/2024 et 5/5/2025
// -------------------------------------------------
$date1 = new DateTime("2024-12-04");   // 4 décembre 2024
$date2 = new DateTime("2025-05-05");   // 5 mai 2025

// Calculer la différence entre les deux dates
$difference = $date1->diff($date2);

// Convertir les jours totaux en semaines
$nb_semaines = floor($difference->days / 7);

echo "4. Nombre de semaines entre le 04/12/2024 et le 05/05/2025 : " . $nb_semaines . " semaines" . "<br>";
echo "   (soit " . $difference->days . " jours au total)" . "<br>";
