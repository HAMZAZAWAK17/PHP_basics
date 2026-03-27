<?php
// index.php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tpbd1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Si la connexion à la base de données échoue (elle ne sera pas créée par défaut)
if ($conn->connect_error) {
    die("<h3>Erreur de connexion</h3> Veuillez d'abord créer la base de données 'tpbd1' et la table 'client' via phpMyAdmin ou un script SQL.");
}

$result = $conn->query("SELECT * FROM client");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ma Gestion de Clients</title>
    <style>
        table { width: 80%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #f7f9fb; font-weight: bold; }
        body { font-family: Arial, sans-serif; margin: 50px; }
        .btn-add {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
        }
        .btn-edit { background-color: #2980bc; color: white; padding: 6px 12px; text-decoration: none; border-radius: 3px; font-size: small; }
        .btn-delete { background-color: #f39c12; color: white; padding: 6px 12px; text-decoration: none; border-radius: 3px; font-size: small; }
        .actions { white-space: nowrap; }
    </style>
</head>
<body>

    <a href="insert.html" class="btn-add">Add Customer</a>

    <table>
        <thead>
            <tr>
                <th>Customer Id</th>
                <th>Customer Name</th>
                <th>City</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td class="actions">
                        <a href="#" class="btn-edit">Edit</a>
                        <a href="supprimer.php?id=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirm('Voulez-vous supprimer ce client ?')">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">Aucun client trouvé.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>
