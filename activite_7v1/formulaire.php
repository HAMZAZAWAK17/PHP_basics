<?php
if (isset($_POST['nom'])) {
    $civilite = htmlspecialchars(strip_tags($_POST['civilite']));
    $nom = htmlspecialchars(strip_tags($_POST['nom']));
    $prenom = htmlspecialchars(strip_tags($_POST['prenom']));
    $age = htmlspecialchars(strip_tags($_POST['age']));

    echo "Civilité : " . $civilite . "<br>";
    echo "Nom : " . $nom . "<br>";
    echo "Prénom : " . $prenom . "<br>";
    
    if (isset($_POST['sexe'])) {
        echo "Sexe : " . htmlspecialchars($_POST['sexe']) . "<br>";
    }
    
    echo "Âge : " . $age . " ans<br>";
}
?>
