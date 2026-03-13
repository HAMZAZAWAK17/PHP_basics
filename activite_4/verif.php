<?php
$user = $_POST['user'];
$password = $_POST['password'];

if ($user == "admin" && $password == "pass") {
    echo "Authentification réussie !";
} else {
    echo "Message d'erreur : Identifiants incorrects.";
    echo "<br>";
    echo "<a href='index.php'>Retour vers la page d'authentification</a>";
}
?>
