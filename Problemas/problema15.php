<?php
$texto = $_POST['txt_texto'];
$texto = strtolower($texto);

$a = 0;
$e = 0;
$i = 0;
$o = 0;
$u = 0;

for ($j = 0; $j < strlen($texto); $j++) {
    if ($texto[$j] == 'a') {
        $a++;
    } elseif ($texto[$j] == 'e') {
        $e++;
    } elseif ($texto[$j] == 'i') {
        $i++;
    } elseif ($texto[$j] == 'o') {
        $o++;
    } elseif ($texto[$j] == 'u') {
        $u++;
    }
}

$total = $a + $e + $i + $o + $u;

echo "<hr>";
echo "El texto \"$texto\" posee las siguientes vocales:";
echo "<br>";
echo "<br>";
echo "<table border='1'>";
echo "<tr><th>Vocal</th><th>Cantidad</th></tr>";
echo "<tr><td>Aa</td><td>$a</td></tr>";
echo "<tr><td>Ee</td><td>$e</td></tr>";
echo "<tr><td>Ii</td><td>$i</td></tr>";
echo "<tr><td>Oo</td><td>$o</td></tr>";
echo "<tr><td>Uu</td><td>$u</td></tr>";
echo "<tr><td><b>Total</b></td><td><b>$total</b></td></tr>";
echo "</table>";
echo "<hr>";
?>
