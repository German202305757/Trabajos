<?php
$numero = (int) $_POST['txt_numero'];

    echo "<hr>";
    echo "<br>Numero ingresado: " . $numero;
    echo "<br>Múltiplos de 3 desde 6 hasta " . $numero . ":";
    echo "<hr>";

if ($numero < 6) {
    echo "<br>El numero: " . $numero . " debe ser mayor a 6.";
} else {
    for ($i = 6; $i <= $numero; $i += 3) {
        echo "<br>" . $i;
    }
}
?>