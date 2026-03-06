<?php

// =======================================
// QUESTION 1
// Afficher les entiers de 1 à 10
// en utilisant une boucle WHILE
// =======================================

$i = 1;

while ($i <= 10) {
    echo $i . " ";
    $i++;
}

echo "<br><br>";


// =======================================
// QUESTION 2
// Refaire le programme précédent
// avec une boucle FOR
// =======================================

for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}

echo "<br><br>";


// =======================================
// QUESTION 3
// Produire une ligne horizontale
// de 8 étoiles
// =======================================

for ($i = 1; $i <= 8; $i++) {
    echo "*";
}

echo "<br><br>";


// =======================================
// QUESTION 4
// Produire un carré de 8 lignes
// chaque ligne contient 8 étoiles
// =======================================

for ($ligne = 1; $ligne <= 8; $ligne++) {

    for ($colonne = 1; $colonne <= 8; $colonne++) {
        echo "*";
    }

    echo "<br>";
}

echo "<br>";


// =======================================
// QUESTION 5
// Afficher les nombres de 18 à 1
// par lignes de 3 nombres
// =======================================

$nombre = 18;

while ($nombre >= 1) {

    for ($i = 0; $i < 3; $i++) {
        echo $nombre . " ";
        $nombre--;
    }

    echo "<br>";
}

echo "<br>";


// =======================================
// QUESTION 6
// Afficher la forme suivante
// 1
// 2 2
// 3 3 3
// 4 4 4 4
// 5 5 5 5 5
// =======================================

for ($i = 1; $i <= 5; $i++) {

    for ($j = 1; $j <= $i; $j++) {
        echo $i . " ";
    }

    echo "<br>";
}

echo "<br>";


// =======================================
// QUESTION 7
// Afficher un tableau avec
// bonjour1 bonjour2
// bonjour3 bonjour4
// bonjour5 bonjour6
// =======================================

echo "<table border='1' style='border-collapse: collapse; margin-bottom: 20px;'>";

$numero = 1;

for ($ligne = 1; $ligne <= 3; $ligne++) {

    echo "<tr>";

    for ($colonne = 1; $colonne <= 2; $colonne++) {
        echo "<td style='padding: 10px;'>bonjour" . $numero . "</td>";
        $numero++;
    }

    echo "</tr>";
}

echo "</table>";

echo "<br>";

// =======================================
// QUESTION 8
// Imprimer les deux tableaux de multiplication
// 1. Table de Pythagore (1 à 9)
// 2. Table avec formules (1 à 10)
// =======================================

?>

<style>
    :root {
        --primary: #6366f1;
        --secondary: #4f46e5;
        --bg: #f8fafc;
        --text: #1e293b;
        --border: #e2e8f0;
        --accent: #eff6ff;
    }

    body {
        font-family: 'Inter', system-ui, -apple-system, sans-serif;
        background-color: var(--bg);
        color: var(--text);
        padding: 40px;
        line-height: 1.5;
    }

    h2 {
        color: var(--secondary);
        border-bottom: 2px solid var(--primary);
        padding-bottom: 10px;
        margin-top: 40px;
        font-weight: 700;
        letter-spacing: -0.025em;
    }

    .table-container {
        overflow-x: auto;
        background: white;
        padding: 24px;
        border-radius: 16px;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
        border: 1px solid var(--border);
    }

    table {
        border-collapse: separate;
        border-spacing: 0;
        width: 100%;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid var(--border);
    }

    th, td {
        padding: 12px 16px;
        text-align: center;
        border: 0.5px solid var(--border);
    }

    th {
        background-color: var(--accent);
        color: var(--secondary);
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.05em;
    }

    .header-cell {
        background-color: var(--primary);
        color: white;
        font-weight: bold;
    }

    .row-header {
        background-color: var(--accent);
        color: var(--secondary);
        font-weight: bold;
    }

    tr:hover td {
        background-color: #f1f5f9;
        transition: background-color 0.2s ease;
    }

    .formula-table td {
        font-family: 'Fira Code', 'Courier New', monospace;
        font-size: 0.9rem;
        white-space: nowrap;
    }
</style>

<h2>Tableau de Pythagore (1 à 9)</h2>
<div class="table-container">
    <table>
        <thead>
            <tr>
                <th class="header-cell">i X j</th>
                <?php for ($j = 1; $j <= 9; $j++): ?>
                    <th><?php echo $j; ?></th>
                <?php endfor; ?>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i <= 9; $i++): ?>
                <tr>
                    <td class="row-header"><?php echo $i; ?></td>
                    <?php for ($j = 1; $j <= 9; $j++): ?>
                        <td><?php echo $i * $j; ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>

<h2>Table de Multiplication Détaillée</h2>
<p>Le tableau de multiplication :</p>
<div class="table-container">
    <table class="formula-table">
        <tbody>
            <?php for ($j = 1; $j <= 9; $j++): ?>
                <tr>
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                        <td><?php echo "$i * $j = " . ($i * $j); ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>

<?php
