<?php
// Vérifie si a existe
if (isset($_POST['a'])) {
    
    // Vérifie si a n'est pas vide
    if (!empty($_POST['a'])) {
        
        // Sécurise la variable a
        $a = htmlspecialchars(strip_tags($_POST['a']));
        
        for ($i = 1; $i <= 9; $i++) {
            $resultat = $a * $i;
            echo $a . " x " . $i . " = " . $resultat . "<br>";
        }
    } else {
        echo "Veuillez entrer une valeur.";
    }
}
?>
