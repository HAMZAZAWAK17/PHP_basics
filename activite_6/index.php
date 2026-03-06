<?php
// =======================================
// ACTIVITÉ 6 : LES MOIS DE L'ANNÉE
// =======================================
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Activité 6 - Les Mois</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; padding: 30px; background: #fdfdfd; }
        .card { max-width: 600px; margin: auto; border: 1px solid #ddd; border-radius: 12px; padding: 25px; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        h1 { color: #2c3e50; border-left: 5px solid #27ae60; padding-left: 15px; }
        .info { background: #f9f9f9; padding: 15px; border-radius: 8px; margin: 10px 0; border: 1px dashed #ccc; }
        b { color: #e67e22; }
    </style>
</head>
<body>

<div class="card">
    <h1>Activité 6 - Gestion des Mois</h1>

    <?php
    // 1. Créer et initialiser le tableau mois
    $mois = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "décembre"];
    ?>

    <div class="info">
        <h3>2. Affichage des valeurs spécifiques :</h3>
        <?php
        // La troisième case est à l'index 2 (0, 1, 2)
        echo "Valeur de la troisième case (index 2) : <b>" . $mois[2] . "</b><br>";
        
        // La valeur à l'index 5
        echo "Valeur à l'index 5 (6ème mois) : <b>" . $mois[5] . "</b>";
        ?>
    </div>

    <div class="info">
        <h3>3. Modification (Correction de l'accent) :</h3>
        <?php
        // 'aout' est à l'index 7
        echo "Avant : " . $mois[7] . "<br>";
        
        $mois[7] = "août";
        
        echo "Après correction : <b>" . $mois[7] . "</b>";
        ?>
    </div>
</div>

</body>
</html>
