<?php
$numero = $_POST['txt_numero'];

echo "<br>Tabla de Multiplicar del numero:".$numero;
for ($i=1; $i <11 ; $i++) { 
    $resultado = $numero * $i;
    echo "<br>$numero x $i =  $resultado";
}
?>