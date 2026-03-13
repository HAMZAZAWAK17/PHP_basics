<form action="formulaire.php" method="POST">
    <select name="civilite">
        <option value="Mme">Mme</option>
        <option value="Mr">Mr</option>
    </select>
    Nom : <input type="text" name="nom" placeholder="Entrez votre nom"><br><br>

    Prénom : <input type="text" name="prenom"><br><br>

    Sexe : 
    <input type="radio" name="sexe" value="Masculin"> Masculin
    <input type="radio" name="sexe" value="Féminin"> Féminin<br><br>

    Age : 1 <input type="range" name="age" min="1" max="50"> 50<br><br>

    <input type="submit" value="OK">
</form>
