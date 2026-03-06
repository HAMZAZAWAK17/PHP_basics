<?php
// =======================================
// ACTIVITÉ 5 : LES TABLEAUX
// =======================================
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Activité 5 - Les Tableaux</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; background: #f4f4f9; }
        .container { max-width: 800px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #333; border-bottom: 2px solid #6366f1; padding-bottom: 10px; }
        h2 { color: #4f46e5; margin-top: 25px; font-size: 1.2em; }
        .result { background: #eff6ff; padding: 10px; border-left: 4px solid #3b82f6; margin: 10px 0; font-family: monospace; }
        ul { list-style-type: square; }
    </style>
</head>
<body>

<div class="container">
    <h1>Activité 5 - Manipulation des Tableaux</h1>

    <!-- QUESTION 1 -->
    <?php
    // 1. Créer un tableau des noms de logiciels
    $logiciels = ["Photoshop", "Illustrator", "Adobe premier", "PyCharm", "Sketchup"];
    ?>
    <h2>1. Création du tableau</h2>
    <p>Tableau initialisé avec 5 logiciels.</p>


    <!-- QUESTION 2 -->
    <h2>2. Première case et modification</h2>
    <div class="result">
        <?php
        echo "Logiciel initial de la 1ère case : " . $logiciels[0] . "<br>";
        
        // Modifier la valeur
        $logiciels[0] = "CS4";
        
        echo "Nouvelle valeur de la 1ère case : " . $logiciels[0];
        ?>
    </div>


    <!-- QUESTION 3 -->
    <h2>3. Compter le nombre de logiciels</h2>
    <div class="result">
        <?php
        $nombre = count($logiciels);
        echo "Le tableau contient : " . $nombre . " logiciels.";
        ?>
    </div>


    <!-- QUESTION 4 -->
    <h2>4. Affichage (Sans boucle et Avec boucle)</h2>

    <h3>A. Sans boucle (print_r)</h3>
    <div class="result">
        <?php
        // Affichage brut sans boucle
        echo "<pre>";
        print_r($logiciels);
        echo "</pre>";
        ?>
    </div>

    <h3>B. Avec boucle (foreach)</h3>
    <ul>
        <?php
        // Affichage propre avec une boucle foreach
        foreach ($logiciels as $nom) {
            echo "<li>$nom</li>";
        }
        ?>
    </ul>
</div>

</body>
</html>
