<?php
// Inclusion du menu (qui vérifie automatiquement si l'utilisateur est connecté)
require_once('menu.php');
require_once('db.php');

$message = "";

// 2) Formulaire permettant d'ajouter des utilisateurs dans la base
if (isset($_POST['btn_ajouter'])) {
    
    // Récupérer et sécuriser les données envoyées par le formulaire
    $firstName = mysqli_real_escape_string($connexion, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($connexion, $_POST['lastName']);
    $username = mysqli_real_escape_string($connexion, $_POST['username']);
    $password = mysqli_real_escape_string($connexion, $_POST['password']);
    $age = (int)$_POST['age'];

    // Requête d'insertion dans la table users
    $sql = "INSERT INTO users (firstName, lastName, username, password, age) 
            VALUES ('$firstName', '$lastName', '$username', '$password', $age)";
    
    if (mysqli_query($connexion, $sql)) {
        // Redirection vers le formulaire à nouveau avec un indicateur de succès (Partie 1, Q2)
        header("Location: users.php?succes=1");
        // Quand on fait une redirection, il faut TOUJOURS faire un exit()
        exit();
    } else {
        $message = "<div class='msg-erreur'>Erreur lors de l'ajout : " . mysqli_error($connexion) . "</div>";
    }
}

// On vérifie s'il y a le paramètre '?succes=1' dans l'URL (suite à la redirection)
if (isset($_GET['succes']) && $_GET['succes'] == 1) {
    $message = "<div class='msg-succes'>Utilisateur ajouté avec succès dans la base 'tpdb' !</div>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un Utilisateur</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f9f9f9; }
        .form-container { background-color: white; padding: 25px; border: 1px solid #ccc; width: 350px; border-radius: 5px;}
        input[type="text"], input[type="password"], input[type="number"] {
            display: block; width: 95%; margin-bottom: 15px; padding: 8px; border: 1px solid #ccc;
        }
        .btn { background-color: #4CAF50; color: white; padding: 10px; width: 100%; border: none; cursor: pointer; font-size: 16px; }
        .btn:hover { background-color: #45a049; }
        .msg-succes { color: green; font-weight: bold; margin-bottom: 15px; }
        .msg-erreur { color: red; font-weight: bold; margin-bottom: 15px; }
    </style>
</head>
<body>
    
    <h2>Créer un nouvel utilisateur</h2>
    
    <!-- Affichage des messages de confirmation ou d'erreur -->
    <?php echo $message; ?>

    <div class="form-container">
        <!-- Formulaire d'ajout -->
        <form method="POST" action="users.php">
            <label>Prénom :</label>
            <input type="text" name="firstName" required>

            <label>Nom :</label>
            <input type="text" name="lastName" required>

            <label>Nom d'utilisateur (Username) :</label>
            <input type="text" name="username" required>

            <label>Mot de passe :</label>
            <input type="password" name="password" required>

            <label>Âge :</label>
            <input type="number" name="age" required min="1">

            <button type="submit" name="btn_ajouter" class="btn">Ajouter dans la base</button>
        </form>
    </div>
    
</body>
</html>
