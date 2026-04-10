<?php
// Inclusion du menu et vérification que l'utilisateur est bien connecté
require_once('menu.php');
require_once('db.php');

$utilisateur_trouve = null;
$message = "";

// =============== PARTIE 2 : COMPTEURS AVEC SESSION ===============

// 2) Bouton "Reset" pour un utilisateur spécifique
// Si le formulaire POST a envoyé "btn_reset"
if (isset($_POST['btn_reset']) && isset($_POST['user_id_a_reset'])) {
    $id_a_reset = $_POST['user_id_a_reset'];
    
    // On force le compteur de cet ID à 0
    $_SESSION['visites'][$id_a_reset] = 0;
    $message = "<div style='color:green; margin-bottom:15px;'>Le compteur de visites pour l'ID $id_a_reset a été réinitialisé !</div>";
    
    // On simule une recherche GET pour que la fiche reste affichée et mise à jour
    $_GET['id'] = $id_a_reset; 
}

// 3) Bouton "Reset All" : détruire toute la session de visites
if (isset($_POST['btn_resetAll'])) {
    // Note : Selon l'énoncé, "en détruisant toute la session utilisateur"
    // Si on fait session_destroy(), l'utilisateur sera VRAIMENT déconnecté de tout le site.
    // L'énoncé est peut-être piégeur. Nous allons juste détruire la partie de session liée au compteur
    // pour que ce soit fonctionnel sans nous déconnecter de l'application !
    
    if (isset($_SESSION['visites'])) {
        unset($_SESSION['visites']); // Détruit toute trace du tableau des visites
    }
    
    $message = "<div style='color:green; margin-bottom:15px;'>TOUS les compteurs de visites ont été remis à zéro !</div>";
}


// =============== PARTIE 1 : RECHERCHE PAR ID (FORMULAIRE GET) ===============

// 5) Champ de recherche (par ID) : On vérifie si l'URL contient un paramètre 'id' (?id=...)
if (isset($_GET['id']) && !empty($_GET['id'])) {
    
    $id_recherche = (int)$_GET['id']; // On s'assure que c'est un entier
    
    // Requête pour trouver l'utilisateur avec cet ID
    $requete = "SELECT * FROM users WHERE id = $id_recherche";
    $resultat = mysqli_query($connexion, $requete);
    
    if (mysqli_num_rows($resultat) == 1) {
        $utilisateur_trouve = mysqli_fetch_assoc($resultat);
        
        // --- 1) Ajouter une variable de session qui sert de compteur pour les visites ---
        
        // Initialiser le tableau des visites global s'il n'existe pas encore
        if (!isset($_SESSION['visites'])) {
            $_SESSION['visites'] = [];
        }
        
        // Initialiser le compteur à 0 pour cet ID précis s'il n'existe pas encore
        if (!isset($_SESSION['visites'][$id_recherche])) {
            $_SESSION['visites'][$id_recherche] = 0;
        }
        
        // On incrémente le compteur de 1 à CHAQUE visite 
        // (Sauf si on vient juste de cliquer sur btn_reset !)
        if (!isset($_POST['btn_reset'])) {
            $_SESSION['visites'][$id_recherche]++;
        }
    } else {
        $message = "<div style='color:red;'>Aucun utilisateur ne correspond à l'ID <b>$id_recherche</b>.</div>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Recherche & Profil</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color:#f9f9f9; }
        .recherche-box { background: white; padding: 15px; border: 1px solid #ccc; margin-bottom: 20px; display:inline-block; }
        .profil-card { border: 2px solid #555; padding: 20px; width: 400px; background-color: white; border-radius: 8px; box-shadow: 2px 2px 12px rgba(0,0,0,0.1); }
        .visites { color: #e91e63; font-weight: bold; font-size: 20px; margin: 15px 0; padding:10px; background:#fce4ec; border-radius:5px;}
        .btn { padding: 8px 15px; cursor: pointer; border:none; color:white; border-radius:4px; font-weight:bold;}
        .btn-search { background-color: #2196F3; }
        .btn-reset { background-color: #ff9800; }
        .btn-resetAll { background-color: #f44336; margin-left:20px; }
    </style>
</head>
<body>

    <h2>Recherche d'utilisateur (Par ID)</h2>

    <?php echo $message; ?>

    <div class="recherche-box">
        <!-- Formulaire avec méthode GET pour la recherche -->
        <form method="GET" action="searchUser.php">
            <label>Entrez l'ID :</label>
            <input type="number" name="id" required min="1" placeholder="Ex: 1">
            <button type="submit" class="btn btn-search">Chercher le profil</button>
        </form>
    </div>

    <!-- 3) Bouton Reset All -->
    <form method="POST" action="searchUser.php" style="display:inline-block;">
        <button type="submit" name="btn_resetAll" class="btn btn-resetAll" onclick="return confirm('Êtes-vous sûr de vouloir tout remettre à zéro ?');">
            Reset All (Réinitialiser TOUS les compteurs)
        </button>
    </form>

    <hr style="margin:20px 0;">

    <!-- Si on a trouvé un utilisateur, on affiche son profil -->
    <?php if ($utilisateur_trouve): ?>
        <div class="profil-card">
            <h3 style="margin-top:0; border-bottom:1px solid #ccc; padding-bottom:10px;">Détails (ID: <?php echo $utilisateur_trouve['id']; ?>)</h3>
            
            <p><b>Prénom :</b> <?php echo htmlspecialchars($utilisateur_trouve['firstName']); ?></p>
            <p><b>Nom :</b> <?php echo htmlspecialchars($utilisateur_trouve['lastName']); ?></p>
            <p><b>Username :</b> <?php echo htmlspecialchars($utilisateur_trouve['username']); ?></p>
            <p><b>Âge :</b> <?php echo htmlspecialchars($utilisateur_trouve['age']); ?> ans</p>
            
            <!-- Affichage du compteur lu depuis la variable de session -->
            <div class="visites">
                Nombre de visites : <?php echo $_SESSION['visites'][$id_recherche]; ?>
            </div>
            
            <!-- 2) Bouton Reset pour cet utilisateur en particulier (Formulaire POST) -->
            <form method="POST" action="searchUser.php?id=<?php echo $id_recherche; ?>">
                <input type="hidden" name="user_id_a_reset" value="<?php echo $id_recherche; ?>">
                <button type="submit" name="btn_reset" class="btn btn-reset">
                    Reset le compteur de cet utilisateur
                </button>
            </form>
        </div>
    <?php endif; ?>

</body>
</html>
