<?php
/**
 * Travaux Pratiques 6 - Exercice 1 (Partie I)
 * Script simple et commenté pour comprendre la manipulation des fichiers en PHP.
 */

// 2. Déclarer les variables comme des tableaux de chaînes de caractères
$Ancien_Num = [];
$New_Num = [];

// 3. Utiliser la fonction fopen() pour faire une lecture du fichier texte.
// Le mode 'r' indique "read" (lecture seule)
$fichier = fopen('numeros.txt', 'r');

// On s'assure que le fichier a bien été ouvert sans erreur
if ($fichier) {
    // Req: Utiliser une boucle conditionnelle pour charger toutes les lignes
    // feof() vérifie si on a atteint la fin du fichier ("End Of File")
    while (!feof($fichier)) {
        // fgets() lit la ligne courante
        $ligne = fgets($fichier);
        
        // trim() enlève les espaces ou les sauts à la ligne ('\n') autour du texte
        $ligne_propre = trim($ligne);
        
        // 4. Charger le contenu des lignes dans le tableau Ancien_Num[]
        // Si la ligne n'est pas vide, on l'ajoute au tableau
        if ($ligne_propre != "") {
            $Ancien_Num[] = $ligne_propre;
        }
    }
    
    // Toujours fermer le fichier après utilisation
    fclose($fichier);
} else {
    echo "Erreur : Impossible d'ouvrir le fichier numeros.txt<br>";
}

// 5. Utiliser substr() pour se débarrasser du '0' au début et ajouter '06'
// On utilise une boucle for pour parcourir le tableau
for ($i = 0; $i < count($Ancien_Num); $i++) {
    /** 
     * Req: la fonction substr(chaine, indice_debut, longueur)
     * substr($Ancien_Num[$i], 1) => prend la chaine à partir de l'indice 1 (ignore donc le 1er caractère '0')
     * On concatène avec "06" comme demandé
     */
    $New_Num[$i] = "06" . substr($Ancien_Num[$i], 1);
}

// 6. Utiliser fopen() pour créer et ouvrir un fichier "newnum.txt" en mode ajout
// Le mode 'a' indique "append" (ajout à la fin sans écraser le contenu)
$nouveau_fichier = fopen('newnum.txt', 'a');

// 7. Charger le contenu du tableau New_Num[] dans le fichier texte
if ($nouveau_fichier) {
    // On parcourt chaque nouveau numéro
    foreach ($New_Num as $numero) {
        // fputs() (ou fwrite()) écrit dans le fichier
        // PHP_EOL sert à faire un retour à la ligne
        fputs($nouveau_fichier, $numero . PHP_EOL);
    }
    
    // On ferme le flux
    fclose($nouveau_fichier);
    echo "<h2>Opération terminée avec succès !</h2>";
    echo "Le fichier <b>newnum.txt</b> a été créé et rempli.<br><br>";
} else {
    echo "Erreur : Impossible de créer ou d'ouvrir newnum.txt<br>";
}

// ---- AFFICHAGE POUR VÉRIFIER VISUELLEMENT ----
echo "<b>Tableau d'origine (Ancien_Num) :</b><br>";
echo "<pre>";
print_r($Ancien_Num);
echo "</pre>";

echo "<b>Nouveau tableau (New_Num) :</b><br>";
echo "<pre>";
print_r($New_Num);
echo "</pre>";

?>
