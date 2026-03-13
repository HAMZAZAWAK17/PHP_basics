<?php
// Vérifie si les variables existent (isset)
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])) {
    
    // Vérifie si les variables ne sont pas vides (empty)
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'])) {
        
        // Sécurise les données (strip_tags pour enlever les balises HTML, htmlspecialchars pour convertir les caractères spéciaux)
        $nom = htmlspecialchars(strip_tags($_POST['nom']));
        $prenom = htmlspecialchars(strip_tags($_POST['prenom']));
        $email = htmlspecialchars(strip_tags($_POST['email']));
        
        echo "Bonjour " . $prenom . " " . $nom . ", votre email est " . $email;
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
?>
