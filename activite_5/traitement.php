<?php
// Vérifier que le formulaire a été envoyé
if (isset($_POST['nom'])) {
    
    // Récupérer et sécuriser les données simples
    $civilite = htmlspecialchars(strip_tags($_POST['civilite']));
    $nom = htmlspecialchars(strip_tags($_POST['nom']));
    $prenom = htmlspecialchars(strip_tags($_POST['prenom']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    
    // Affichage
    echo "Nouvelle inscription reçue : <br>";
    echo "Bonjour " . $civilite . " " . $prenom . " " . $nom . "<br>";
    echo "Email : " . $email . "<br>";

    // Vérification simple des mots de passe
    if ($_POST['mdp'] == $_POST['cmdp']) {
        echo "Les mots de passe correspondent !";
    } else {
        echo "Erreur : Les mots de passe ne correspondent pas.";
    }
}
?>
