<form action="traitement.php" method="POST">
    Votre Nom d'utilisateur : <input type="text" name="user"><br><br>
    Votre Mot de Passe : <input type="password" name="mdp"><br><br>
    
    Votre Profession : 
    <select name="profession" size="3">
        <option value="Agent immobilier">Agent immobilier</option>
        <option value="Architecte">Architecte</option>
        <option value="Commerce et artisanat">Commerce et artisanat</option>
    </select><br><br>

    Votre Pays : 
    <select name="pays">
        <option value="Votre Choix ...">Votre Choix ...</option>
        <option value="Maroc">Maroc</option>
        <option value="France">France</option>
    </select><br><br>

    Votre Sexe : 
    <input type="radio" name="sexe" value="M"> M
    <input type="radio" name="sexe" value="F"> F<br><br>

    Votre Langue : 
    <select name="langues[]" size="4" multiple>
        <option value="Arabe">Arabe</option>
        <option value="Anglais">Anglais</option>
        <option value="Espagnole">Espagnole</option>
        <option value="Francais">Francais</option>
    </select><br><br>

    Votre Loisir : 
    <input type="checkbox" name="loisirs[]" value="Sport"> Sport
    <input type="checkbox" name="loisirs[]" value="Voyage"> Voyage
    <input type="checkbox" name="loisirs[]" value="Music"> Music
    <input type="checkbox" name="loisirs[]" value="Lecture"> Lecture
    <input type="checkbox" name="loisirs[]" value="Internet"> Internet
    <input type="checkbox" name="loisirs[]" value="Autre"> Autre<br><br>

    <input type="reset" value="Vider">
    <input type="submit" value="Envoyer">
    <input type="reset" value="Rétablir">
</form>
