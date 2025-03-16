<?php
$nombre = $_POST['txt_texto'];
$numero = (int) $_POST['txt_numero'];

echo "<hr>";
echo "<br>Número ingresado es: ". $numero;
echo "<br>Nombre ingresado es: ". $nombre;
echo "<br>Números del 1 al ". $numero . "<br>";

for ($i = 1; $i <= $numero; $i++) {
    echo $i . "<br>";
}
?>
