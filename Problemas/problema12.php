<?php
$numero1 = (int) $_POST['txt_numero1'];
$numero2 = (int) $_POST['txt_numero2'];

echo "<hr>";
echo "<br>Datos ingresados:";
echo "<br>Valor 1: " . $numero1;
echo "<br>Valor 2: " . $numero2;
echo "<hr>";

if ($numero1 == $numero2) {
    echo "<br>Los numeros son iguales";
    echo "<br>Valor 1: " . $numero1;
    echo "<br>Valor 2: " . $numero2;
} elseif (abs($numero1 - $numero2) < 5) {
    echo "<br>No hay diferencia de 5 entre los valores.";
} else {
    $menor = min($numero1, $numero2);
    $mayor = max($numero1, $numero2);

    echo "<br>Numeros de 5 en 5 desde $menor hasta $mayor:";
    
    for ($i = $menor; $i <= $mayor; $i += 5) {
        echo "<br>" . $i;
    }
    echo "<hr>";
}
?>
