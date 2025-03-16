<?php
$primertexto = $_POST['txt_primertexto'];
$segundotexto = $_POST['txt_segundotexto'];
$tercertexto = $_POST['txt_tercertexto'];

$ultimoletra1 = strtolower(substr($primertexto, -1));
$ultimoletra2 = strtolower(substr($segundotexto, -1));
$ultimoletra3 = strtolower(substr($tercertexto, -1));

echo "<hr>";
echo "<br>Textos Ingresados:";
echo "<br>";
echo "<br>Primer Texto: ".$primertexto;
echo "<br>Segundo Texto: ".$segundotexto;
echo "<br>Tercer Texto: ".$tercertexto;
echo "<hr>";

if ($ultimoletra1 === $ultimoletra2 && $ultimoletra1 === $ultimoletra3) {
    echo "<br>Los tres textos terminan con el mismo carácter.";
} else {
    echo "<br>Los textos NO terminan con el mismo carácter.";
}

?>