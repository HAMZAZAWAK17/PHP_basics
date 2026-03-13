<?php
$a = $_POST['a'];

for ($i = 1; $i <= 9; $i++) {
    $resultat = $a * $i;
    echo $a . " x " . $i . " = " . $resultat . "<br>";
}
?>
