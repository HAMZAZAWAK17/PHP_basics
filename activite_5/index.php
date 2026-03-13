<form action="traitement.php" method="POST">
    Civilité: 
    <select name="civilite">
        <option value="Mlle">Mlle</option>
        <option value="Mme">Mme</option>
        <option value="M.">M.</option>
    </select><br><br>

    Nom: <input type="text" name="nom"><br><br>
    Prénom: <input type="text" name="prenom"><br><br>
    Email: <input type="text" name="email"><br><br>
    Mot de passe: <input type="password" name="mdp"><br><br>
    Confirmation du mot de passe: <input type="password" name="cmdp"><br><br>

    <input type="submit" value="Valider l'inscription">
</form>
