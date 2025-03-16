<?php
$numero = (int)$_POST['txt_numero'];

echo "<table border='1' width='50%'>";

for ($i = 1; $i <= $numero; $i++) {
    $color = ($i % 2 == 0) ? "blue" : "green";
    
    echo "<tr style='background-color: $color; color: white;'>";
    echo "<td>Fila $i</td>";
    echo "<td>Fila $i</td>";
    echo "<td>Fila $i</td>";
    echo "</tr>";
}

echo "</table>";
?>