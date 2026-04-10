<?php
/**
 * Travaux Pratiques 6 - Exercice 1 (Partie II)
 * Formulaire de gestion d'une semi-Base de Données avec un fichier texte.
 */

$message_succes = "";
$message_erreur = "";
$liste_filieres = [];

// 2. Utiliser le bouton "sauvegarder" pour poster les données
if (isset($_POST['btn_sauvegarder'])) {
    
    // Récupérer les données envoyées par le formulaire
    $code = $_POST['code_filiere'];
    $libelle = $_POST['libelle'];
    $niveau = $_POST['niveau_acces'];
    $duree = $_POST['duree_formation'];

    // Préparer la ligne à insérer (on utilise un " | " pour séparer les colonnes)
    $ligne_a_ajouter = $code . " | " . $libelle . " | " . $niveau . " | " . $duree . PHP_EOL;

    // Ouvrir le fichier "Filiere.txt" en mode ajout à la fin ('a')
    $fichier = fopen('Filiere.txt', 'a');
    
    if ($fichier) {
        // Envoyer les données récupérées au fichier texte
        fputs($fichier, $ligne_a_ajouter);
        
        // 4. Fermer le flux du fichier
        fclose($fichier);
        $message_succes = "Les données ont été sauvegardées avec succès dans Filiere.txt !";
    } else {
        $message_erreur = "Erreur lors de l'ouverture du fichier de sauvegarde.";
    }
}

// 3. Le bouton "liste des filières" rouvre le fichier en lecture
if (isset($_POST['btn_liste'])) {
    
    // On vérifie d'abord que le fichier existe bien
    if (file_exists('Filiere.txt')) {
        // L'ouvrir en mode lecture ('r')
        $fichier = fopen('Filiere.txt', 'r');
        
        if ($fichier) {
            // Lire le fichier ligne par ligne
            while (!feof($fichier)) {
                $ligne = fgets($fichier);
                // Si la ligne n'est pas vide, on l'ajoute au tableau à afficher
                if (trim($ligne) != "") {
                    $liste_filieres[] = trim($ligne);
                }
            }
            // 4. Fermer le flux du fichier
            fclose($fichier);
        }
    } else {
        $message_erreur = "Le fichier Filiere.txt est vide ou n'existe pas encore.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Saisie des Filières - TP6</title>
    <!-- Styles CSS très simples pour que le formulaire ressemble à l'image -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        /* Style inspiré par l'image de l'exercice avec fond jaune */
        .form-bandeau {
            background-color: #ffeb3b; /* Couleur jaune */
            padding: 15px;
            border: 1px solid #777;
            display: inline-block;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
            border-radius: 4px;
        }
        .form-bandeau label {
            font-size: 14px;
            color: #333;
            margin-left: 10px;
            font-weight: bold;
        }
        .form-bandeau input[type="text"] {
            margin-right: 15px;
            padding: 4px;
            border: 1px solid #ccc;
        }
        .btn {
            padding: 5px 10px;
            cursor: pointer;
            background-color: #f0f0f0;
            border: 1px solid #999;
            margin-left: 5px;
        }
        .msg-succes { color: green; font-weight: bold; }
        .msg-erreur { color: red; font-weight: bold; }
        
        table {
            margin-top: 25px;
            border-collapse: collapse;
            width: 80%;
            background-color: #fcfcfc;
        }
        table, th, td {
            border: 1px solid #999;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th { background-color: #eee; }
    </style>
</head>
<body>

    <h2>Partie II : Alimentation fichier "Filiere.txt"</h2>

    <!-- Affichage des messages -->
    <?php if ($message_succes): ?>
        <p class="msg-succes"><?php echo $message_succes; ?></p>
    <?php endif; ?>
    <?php if ($message_erreur): ?>
        <p class="msg-erreur"><?php echo $message_erreur; ?></p>
    <?php endif; ?>

    <!-- 1. Créer le formulaire sur une application web -->
    <div class="form-bandeau">
        <form method="POST" action="partie2.php">
            
            <label>Code Filière :</label>
            <input type="text" name="code_filiere" required>

            <label>Libellé :</label>
            <input type="text" name="libelle" required>

            <label>Niveau d'accès :</label>
            <input type="text" name="niveau_acces" required>

            <label>Durée de formation :</label>
            <input type="text" name="duree_formation" required>

            <!-- Boutons de soumissions pour l'action -->
            <button type="submit" name="btn_sauvegarder" class="btn">Sauvegarder</button>
            
            <!-- formnovalidate permet d'ignorer le 'required' quand on clique sur ce bouton -->
            <button type="submit" name="btn_liste" class="btn" formnovalidate>Liste des filières</button>
            
        </form>
    </div>

    <!-- Affichage du contenu du fichier texte si "Liste des filières" a été cliqué -->
    <?php if (isset($_POST['btn_liste']) && count($liste_filieres) > 0): ?>
        <h3>Contenu actuel de Filiere.txt :</h3>
        <table>
            <tr>
                <th>Ligne dans le fichier texte</th>
            </tr>
            <?php foreach ($liste_filieres as $ligne): ?>
                <tr>
                    <td><?php echo htmlspecialchars($ligne); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

</body>
</html>
