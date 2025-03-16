<?php
$numero1 = (int)$_POST['txt_numero1'];
$numero2 = (int)$_POST['txt_numero2'];

echo "<hr>";
echo "<br>Primer numero ingresado: ". $numero1;
echo "<br>Segundo numero ingresado: ". $numero2;
echo "<br>";
echo "<br>";
echo "<hr>";

while ($numero2 != 0) {
    $temp = $numero2;
    $numero2 = $numero1 % $numero2;
    $numero1 = $temp;
}

echo "<br>El MCD es: ". $numero1;

?>