<?php
if (isset($_POST['nom']) && !empty($_POST['nom'])) {
    
    $civilite = htmlspecialchars(strip_tags($_POST['civilite']));
    $nom = htmlspecialchars(strip_tags($_POST['nom']));
    $prenom = htmlspecialchars(strip_tags($_POST['prenom']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    
    echo "Bonjour " . $civilite . " " . $prenom . " " . $nom . "<br>";
    echo "Email : " . $email . "<br>";

    if ($_POST['mdp'] == $_POST['cmdp']) {
        echo "Les mots de passe correspondent !";
    } else {
        echo "Erreur : Les mots de passe ne correspondent pas.";
    }
}
?>
