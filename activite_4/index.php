<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Activité 4 - Authentification</title>
</head>
<body>
    <h2>Page de connexion</h2>
    <form action="verif.php" method="POST">
        <label for="user">Utilisateur :</label> 
        <input type="text" id="user" name="user" required><br><br>
        
        <label for="password">Mot de passe :</label> 
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
