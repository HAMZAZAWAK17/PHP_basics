<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Activité 3 - Sexe et Nom</title>
</head>
<body>
    <h2>Informations personnelles</h2>
    <form action="bonjour.php" method="POST">
        <label for="sexe">Sexe :</label>
        <select id="sexe" name="sexe" required>
            <option value="Mr">Mr</option>
            <option value="Mme">Mme</option>
        </select><br><br>

        <label for="nom">Nom :</label> 
        <input type="text" id="nom" name="nom" required><br><br>
        
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
