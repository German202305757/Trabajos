<?php
$texto1 = $_POST['txt_texto1'];
$texto2 = $_POST['txt_texto2'];

$texto1letra1 = strtolower(substr($texto1, 0, 1));
$texto2letra1 = strtolower(substr($texto2, 0, 1));

if ($texto1letra1 === $texto2letra1) {
    echo "<br>Ambos textos inician con la misma letra.";
} else {
    echo "<br>Los textos no inician con la misma letra.";
}

echo "<hr>";
echo "<br>Textos Ingresados:";
echo "<br>Primer Texto: ".$texto1;
echo "<br>Segundo Texto:".$texto2;

?>