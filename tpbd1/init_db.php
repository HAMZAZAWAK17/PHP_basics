<?php
// init_db.php
// Script pour créer automatiquement la base de données et la table client
$servername = "localhost";
$username = "root";
$password = "";

// 1. Connexion au serveur sans base de données
$conn = new mysqli($servername, $username, $password);

// 2. Création de la base de données si elle n'existe pas
$sql_db = "CREATE DATABASE IF NOT EXISTS tpbd1";
if ($conn->query($sql_db) === TRUE) {
    echo "Base de données 'tpbd1' créée ou déjà existante.<br>";
}

// 3. Selection de la base
$conn->select_db("tpbd1");

// 4. Création de la table client
$sql_table = "CREATE TABLE IF NOT EXISTS client (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL
)";

if ($conn->query($sql_table) === TRUE) {
    echo "Table 'client' créée ou déjà existante.<br>";
    echo "<br><b>Initialisation terminée !</b><br>";
    echo "<a href='index.php'>Aller à l'accueil</a>";
} else {
    echo "Erreur lors de la création de la table : " . $conn->error;
}

$conn->close();
?>
