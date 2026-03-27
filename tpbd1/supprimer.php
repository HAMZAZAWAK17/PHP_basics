<?php
// supprimer.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tpbd1";

$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM client WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirige vers l'accueil après suppression
        exit();
    } else {
        echo "Erreur lors de la suppression : " . $conn->error;
    }
}
$conn->close();
?>
