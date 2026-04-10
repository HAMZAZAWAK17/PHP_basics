<?php
// Toujours démarrer la session au tout début du fichier quand on manipule des sessions
session_start();

// Inclure la configuration de la base de données
require_once('db.php');

$erreur = "";

// 6.a) Vérifier si le formulaire de login a été soumis
if (isset($_POST['btn_login'])) {
    
    // Récupérer les champs
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Éviter les injections SQL (sécurité basique)
    $username = mysqli_real_escape_string($connexion, $username);
    $password = mysqli_real_escape_string($connexion, $password);

    // 5) Authentification dynamique : on cherche dans la table users
    // On suppose que le mot de passe n'est pas crypté (selon l'énoncé)
    $requete = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $resultat = mysqli_query($connexion, $requete);

    // Si on trouve une ligne, ça veut dire que le login et mdp sont corrects
    if (mysqli_num_rows($resultat) == 1) {
        
        $utilisateur_trouve = mysqli_fetch_assoc($resultat);
        
        // 6.c) On initialise la session avec les infos de l'utilisateur
        $_SESSION['utilisateur_connecte'] = true;
        $_SESSION['username'] = $utilisateur_trouve['username'];
        
        // Et on le redirige vers la page listUsers.php
        header("Location: listUsers.php");
        exit(); // Toujours faire un exit() après un header pour stopper l'exécution
        
    } else {
        // 6.b) Si le mot de passe est erroné (on n'a pas trouvé de résultat), l'utilisateur reste sur login.php
        $erreur = "Identifiants incorrects, veuillez réessayer.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Connexion (Login)</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #eee; padding: 50px; }
        .login-container { background: white; padding: 25px; border-radius: 8px; width: 300px; margin: auto; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .login-container h2 { text-align: center; color: #333; }
        .login-container input { width: 90%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; }
        .btn { width: 100%; padding: 10px; background-color: #2196F3; color: white; border: none; cursor: pointer; font-weight: bold; border-radius: 4px;}
        .btn:hover { background-color: #0b7dda; }
        .msg-erreur { color: red; margin-bottom: 15px; text-align: center; font-size: 14px; }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Authentification</h2>
        
        <!-- Affichage du message d'erreur si la connexion échoue -->
        <?php if ($erreur != ""): ?>
            <div class="msg-erreur"><?php echo $erreur; ?></div>
        <?php endif; ?>
        
        <!-- Formulaire classique (usename / password) -->
        <form method="POST" action="login.php">
            <label>Nom d'utilisateur :</label>
            <input type="text" name="username" required placeholder="Ex: admin">
            
            <label>Mot de passe :</label>
            <input type="password" name="password" required placeholder="Ex: admin">
            
            <button type="submit" name="btn_login" class="btn">Se connecter</button>
        </form>
    </div>

</body>
</html>
