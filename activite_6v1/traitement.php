<?php
if (isset($_POST['user'])) {
    echo "Utilisateur : " . htmlspecialchars($_POST['user']) . "<br>";
    
    if (isset($_POST['profession'])) {
        echo "Profession : " . htmlspecialchars($_POST['profession']) . "<br>";
    }

    if (isset($_POST['pays'])) {
        echo "Pays : " . htmlspecialchars($_POST['pays']) . "<br>";
    }

    if (isset($_POST['sexe'])) {
        echo "Sexe : " . htmlspecialchars($_POST['sexe']) . "<br>";
    }

    // Affichage des choix multiples (tableau)
    echo "Langues : ";
    if (isset($_POST['langues'])) {
        foreach ($_POST['langues'] as $langue) {
            echo htmlspecialchars($langue) . " - ";
        }
    }
    echo "<br>";

    // Affichage des cases à cocher (tableau)
    echo "Loisirs : ";
    if (isset($_POST['loisirs'])) {
        foreach ($_POST['loisirs'] as $loisir) {
            echo htmlspecialchars($loisir) . " - ";
        }
    }
    echo "<br>";
}
?>
