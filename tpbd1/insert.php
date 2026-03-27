<?php
// insert.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tpbd1";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $city = $_POST['city'];

    // Requête SQL d'insertion
    $sql = "INSERT INTO client (name, city) VALUES ('$name', '$city')";

    if ($conn->query($sql) === TRUE) {
        echo "Client ajouté avec succès !";
        echo "<br><br><a href='index.php'>Aller à la liste des clients</a>";
    } else {
        echo "Erreur lors de l'insertion : " . $conn->error;
    }
}
$conn->close();
?>
