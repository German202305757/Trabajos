<?php
$numerovalidar = $_POST['txt_numerovalidar'];

echo "<br>El numero ingresado es:";
if ($numerovalidar > 0) {
    echo "<br> Positivo";
} elseif ($numerovalidar < 0) {
    echo "<br> Negativo";
} else {
    echo "<br> Neutro";
} 

?>