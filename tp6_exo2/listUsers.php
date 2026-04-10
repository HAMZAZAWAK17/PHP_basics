<?php
// Inclusion du menu et de la sécurité (Vérification de Session)
require_once('menu.php');
require_once('db.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Liste des Utilisateurs</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color:#f9f9f9; }
        table { border-collapse: collapse; width: 90%; background: white; margin-top: 20px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #f2f2f2; color: #333; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        tr:hover { background-color: #f1f1f1; }
    </style>
</head>
<body>
    <h2>4) Liste de tous les utilisateurs enregistrés</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Prénom (firstName)</th>
            <th>Nom (lastName)</th>
            <th>Nom d'utilisateur (username)</th>
            <th>Mot de passe</th>
            <th>Âge</th>
        </tr>
        <?php
        // Requête pour sélectionner tous les utilisateurs
        $requete = "SELECT * FROM users";
        $resultat = mysqli_query($connexion, $requete);

        // On parcourt chaque ligne retournée par la base de données
        while ($ligne = mysqli_fetch_assoc($resultat)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($ligne['id']) . "</td>";
            echo "<td>" . htmlspecialchars($ligne['firstName']) . "</td>";
            echo "<td>" . htmlspecialchars($ligne['lastName']) . "</td>";
            echo "<td>" . htmlspecialchars($ligne['username']) . "</td>";
            // On affiche le mot de passe car c'est un exercice et non crypté
            echo "<td>" . htmlspecialchars($ligne['password']) . "</td>"; 
            echo "<td>" . htmlspecialchars($ligne['age']) . " ans</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
