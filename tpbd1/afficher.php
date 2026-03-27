<?php
// afficher.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tpbd1";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Récupération de tous les clients
$result = $conn->query("SELECT * FROM client");

echo "<h2>Liste des clients</h2>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Ville</th>
        </tr>";

// Boucle pour afficher chaque ligne du résultat
while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['name']."</td>
            <td>".$row['city']."</td>
          </tr>";
}
echo "</table>";
echo "<br><a href='index.php'>Retour à l'accueil</a>";

$conn->close();
?>
