<?php
// Fichier pour détruire la session et se déconnecter
session_start();
session_unset();       // Supprime toutes les variables de session
session_destroy();   // Détruit complètement la session

// Redirige vers la page de connexion
header("Location: login.php");
exit();
?>
