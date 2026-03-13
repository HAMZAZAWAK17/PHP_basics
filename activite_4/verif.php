<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Activité 4 - Vérification</title>
</head>
<body>
    <?php
    if (isset($_POST['user']) && isset($_POST['password'])) {
        $user = $_POST['user'];
        $password = $_POST['password'];

        // Vérification des identifiants
        if ($user === 'admin' && $password === 'pass') {
            echo "<h1 style='color: green;'>Authentification réussie ! Bienvenue.</h1>";
        } else {
            echo "<h1 style='color: red;'>Erreur d'authentification. Identifiants incorrects.</h1>";
            echo "<a href='index.php'>Retour vers la page d'authentification</a>";
        }
    }
    ?>
</body>
</html>
