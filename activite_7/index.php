<?php
// =======================================
// ACTIVITÉ 7 : TABLEAUX MULTIDIMENSIONNELS
// =======================================
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Activité 7 - Tableaux Complexes</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; padding: 20px; background-color: #f0f2f5; }
        .container { max-width: 900px; margin: auto; background: white; padding: 30px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
        h1 { color: #1a73e8; text-align: center; }
        h2 { border-bottom: 2px solid #e8f0fe; color: #3c4043; padding-bottom: 5px; margin-top: 30px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { padding: 12px; border: 1px solid #dee2e6; text-align: left; }
        th { background-color: #f8f9fa; color: #1a73e8; }
        .method-box { background: #fffcf0; border-left: 5px solid #fbbc04; padding: 15px; margin-top: 10px; }
    </style>
</head>
<body>

<div class="container">
    <h1>Activité 7 - Personnes & Coordonnées</h1>

    <?php
    // 1. Créer un tableau multidimensionnel associatif
    // Clés : Noms de famille
    // Valeurs : Tableaux indicés [Prénom, Ville, Âge]
    $personnes = [
        "Zawak"   => ["Hamza", "Casablanca", 21],
        "Alami"   => ["Sami", "Rabat", 25],
        "Benani"  => ["Sara", "Tanger", 22],
        "Idrissi" => ["Karim", "Marrakech", 28]
    ];
    ?>

    <h2>2. Lecture avec la boucle FOREACH</h2>
    <div class="method-box">
        <table>
            <tr>
                <th>Nom (Clé)</th>
                <th>Prénom</th>
                <th>Ville</th>
                <th>Âge</th>
            </tr>
            <?php foreach ($personnes as $nom => $infos): ?>
                <tr>
                    <td><strong><?php echo $nom; ?></strong></td>
                    <td><?php echo $infos[0]; ?></td>
                    <td><?php echo $infos[1]; ?></td>
                    <td><?php echo $infos[2]; ?> ans</td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <h2>3. Lecture avec la boucle WHILE</h2>
    <div class="method-box">
        <ul>
            <?php 
            // Pour utiliser while sur un tableau associatif, on utilise reset/each ou on transforme en clés numériques
            $cles = array_keys($personnes);
            $i = 0;
            $nb = count($cles);

            while ($i < $nb) {
                $cle = $cles[$i];
                $infos = $personnes[$cle];
                echo "<li><strong>$cle</strong> : $infos[0] habitant à $infos[1] ($infos[2] ans)</li>";
                $i++;
            }
            ?>
        </ul>
    </div>
</div>

</body>
</html>
