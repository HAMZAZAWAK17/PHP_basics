<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Activité 3 - Message de bienvenue</title>
</head>
<body>
    <?php
    if (isset($_POST['sexe']) && isset($_POST['nom'])) {
        $sexe = htmlspecialchars($_POST['sexe']);
        $nom = htmlspecialchars($_POST['nom']);
        
        echo "<h1>Bonjour $sexe $nom</h1>";
    }
    ?>
    <br><a href="index.php">Retour</a>
</body>
</html>
