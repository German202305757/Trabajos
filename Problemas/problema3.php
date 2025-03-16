<?php
$texto = $_POST['txt_texto'];
$numero = (int) $_POST['txt_numero'];

$longitud = strlen($texto);

    echo "<h1>LONGITUD DE TEXTO</h1>";
    echo "Datos:";
    echo "<br>Texto ingresado: $texto";
    echo "<br>Longitud del texto: $longitud";
    echo "<br>Número ingresado: $numero";

if ($longitud > $numero) {
    echo "<br>La longitud del texto es mayor que el número ingresado.";
} elseif ($longitud < $numero) {
    echo "<br>La longitud del texto es menor que el número ingresado.";
} else {
    echo "<br>La longitud del texto es igual al número ingresado.";
}

?>