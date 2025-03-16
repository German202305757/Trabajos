<?php 
$numero1 = $_POST['txt_numero1'];
$numero2 = $_POST['txt_numero2'];
$numero3 = $_POST['txt_numero3'];

if ($numero1 > $numero2 && $numero1 > $numero3) {
    echo "El primer número ingresado ($numero1) es el mayor.<br>";
} elseif ($numero2 > $numero1 && $numero2 > $numero3) {
    echo "El segundo número ingresado ($numero2) es el mayor.<br>";
} elseif ($numero3 > $numero1 && $numero3 > $numero2) {
    echo "El tercer número ingresado ($numero3) es el mayor.<br>";
} else {
    echo "Hay números iguales ingresados.<br>";
}

if ($numero1 < $numero2 && $numero1 < $numero3) {
    echo "El primer número ingresado ($numero1) es el menor.<br>";
} elseif ($numero2 < $numero1 && $numero2 < $numero3) {
    echo "El segundo número ingresado ($numero2) es el menor.<br>";
} elseif ($numero3 < $numero1 && $numero3 < $numero2) {
    echo "El tercer número ingresado ($numero3) es el menor.<br>";
} else {
    echo "Hay números iguales ingresados.<br>";
}
?>