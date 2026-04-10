<?php
// Fichier de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root"; // Utilisateur par défaut de WAMP/XAMPP
$mot_de_passe = ""; // Mot de passe vide par défaut
$base_de_donnees = "tpdb";

// Connexion avec mysqli (mode procédural : le plus simple pour débuter)
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérification de la connexion
if (!$connexion) {
    die("Erreur : La connexion à la base de données a échoué. " . mysqli_connect_error());
}
?>
