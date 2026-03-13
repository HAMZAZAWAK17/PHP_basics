<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Activité 1 - Traitement</title>
</head>
<body>
    <?php
    // Vérifier si les données ont bien été envoyées
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])) {
        // Sécuriser les données
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $email = htmlspecialchars($_POST['email']);
        
        // Afficher le message d'accueil
        echo "<h1>Bonjour $prenom $nom, votre email est $email</h1>";
    } else {
        echo "Veuillez remplir le formulaire.";
    }
    ?>
    <br><a href="index.php">Retour</a>
</body>
</html>
