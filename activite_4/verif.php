<?php
if (isset($_POST['user']) && isset($_POST['password'])) {
    
    if (!empty($_POST['user']) && !empty($_POST['password'])) {
        
        $user = htmlspecialchars(strip_tags($_POST['user']));
        $password = htmlspecialchars(strip_tags($_POST['password']));

        if ($user == "admin" && $password == "pass") {
            echo "Authentification réussie !";
        } else {
            echo "Message d'erreur : Identifiants incorrects.";
            echo "<br>";
            echo "<a href='index.php'>Retour vers la page d'authentification</a>";
        }
    } else {
        echo "Veuillez saisir votre utilisateur et mot de passe.";
        echo "<br><a href='index.php'>Retour</a>";
    }
}
?>
