<?php
// On démarre la session si ce n'est pas déjà fait
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// 6.d) Si l'utilisateur essaie d'accéder sans s'être authentifié, on le redirige vers login.php
if (!isset($_SESSION['utilisateur_connecte']) || $_SESSION['utilisateur_connecte'] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!-- 
MenuBarre de navigation partagée par toutes les pages avec un bouton de déconnexion 
-->
<div style="background-color: #3f51b5; padding: 15px; color: white; display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
    <div>
        <a href="users.php" style="color: white; margin-right: 20px; text-decoration: none; font-weight:bold;">➕ Ajouter User</a>
        <a href="listUsers.php" style="color: white; margin-right: 20px; text-decoration: none; font-weight:bold;">📋 Liste Users</a>
        <a href="searchUser.php" style="color: white; text-decoration: none; font-weight:bold;">🔍 Chercher Profil (Sessions)</a>
    </div>
    
    <div>
        <span style="margin-right:15px; font-style:italic;">Bienvenue, <?php echo htmlspecialchars($_SESSION['username']); ?> !</span>
        <a href="logout.php" style="color: #ffcccc; text-decoration: none; border: 1px solid #ffcccc; padding: 5px 10px; border-radius: 4px;">Déconnexion</a>
    </div>
</div>
