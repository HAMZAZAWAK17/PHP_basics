<?php
if (isset($_POST['sexe']) && isset($_POST['nom'])) {
    
    if (!empty($_POST['sexe']) && !empty($_POST['nom'])) {
        
        $sexe = htmlspecialchars(strip_tags($_POST['sexe']));
        $nom = htmlspecialchars(strip_tags($_POST['nom']));
        
        echo "Bonjour " . $sexe . " " . $nom;
    } else {
        echo "Veuillez remplir le nom.";
    }
}
?>
