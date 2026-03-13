<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Activité 1 - Formulaire</title>
</head>
<body>
    <h2>Formulaire d'inscription</h2>
    <form action="traitement.php" method="POST">
        <label for="nom">Nom :</label> 
        <input type="text" id="nom" name="nom" required><br><br>
        
        <label for="prenom">Prénom :</label> 
        <input type="text" id="prenom" name="prenom" required><br><br>
        
        <label for="email">Email :</label> 
        <input type="email" id="email" name="email" required><br><br>
        
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
