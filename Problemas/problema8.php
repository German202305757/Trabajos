<?php
$texto1 = $_POST['txt_texto1'];
$texto2 = $_POST['txt_texto2'];
$texto3 = $_POST['txt_texto3'];
$texto4 = $_POST['txt_texto4'];
$texto5 = $_POST['txt_texto5'];

echo "<hr>";
echo "<br>Textos Ingresados:";
echo "<br>Texto 1: ". $texto1;
echo "<br>Texto 2: ". $texto2;
echo "<br>Texto 3: ". $texto3;
echo "<br>Texto 4: ". $texto4;
echo "<br>Texto 5: ". $texto5;
echo "<br>";
echo "<hr>";

$textoConcatenado = $texto1 . $texto2 . $texto3 . $texto4 . $texto5;

$longitudTotal = strlen($texto1) + strlen($texto2) + strlen($texto3) + strlen($texto4) + strlen($texto5);
$promedioLongitud = round($longitudTotal / 5);

if ($promedioLongitud > 0 && $promedioLongitud <= strlen($textoConcatenado)) {
    $caracter = strtolower(substr($textoConcatenado, $promedioLongitud - 1, 1));

    if (in_array($caracter, ['a', 'e', 'i', 'o', 'u'])) {
        echo "<br>El texto concatenado es: ".$textoConcatenado;
        echo "<br>";
        echo "<br>El carácter localizado en la posición $promedioLongitud es: '$caracter' y es una vocal.";
    } else {
        echo "<br>El texto concatenado es: ".$textoConcatenado;
        echo "<br>";
        echo "<br>El carácter localizado en la posición $promedioLongitud es: '$caracter' y NO es una vocal.";
    }
} else {
    echo "<br>Error en el cálculo";
}
?>