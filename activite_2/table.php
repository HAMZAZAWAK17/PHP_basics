<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Activité 2 - Résultat</title>
</head>
<body>
    <?php
    if (isset($_POST['a'])) {
        $a = (int)$_POST['a'];
        echo "<h2>Table de multiplication de $a</h2>";
        
        // Boucle pour afficher la table de 1 à 9
        for ($i = 1; $i <= 9; $i++) {
            $resultat = $a * $i;
            echo "$a x $i = $resultat <br>";
        }
    } else {
        echo "Aucune valeur fournie.";
    }
    ?>
    <br><br><a href="index.php">Retour</a>
</body>
</html>
