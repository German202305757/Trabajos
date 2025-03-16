<?php
$textoverificar = $_POST['txt_verificartexto'];

$ultimaletra = strtolower(substr($textoverificar, -1));

if ($ultimaletra === 's') {
    echo "<br>La última letra del texto ingresado es 'S'.";
} else {
    echo "<br>La última letra del texto ingresado NO es 'S'.";
}

echo "<hr>";
echo "<br>Texto Ingresado: ".$textoverificar;
?>
