<?php
$nota1 = $_POST['txt_nota1'];
$nota2 = $_POST['txt_nota2'];
$nota3 = $_POST['txt_nota3'];
$nota4 = $_POST['txt_nota4'];
$nota5 = $_POST['txt_nota5'];
$promedio = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5)/5;

echo "<hr>";
echo "<br>Notas Ingresadas:";
echo "<br>";
echo "<br>Nota 1: ".$nota1;
echo "<br>Nota 2: ".$nota2;
echo "<br>Nota 3: ".$nota3;
echo "<br>Nota 4: ".$nota4;
echo "<br>Nota 5: ".$nota5;
echo "<hr>";

echo "<br> El promedio es de: ".number_format($promedio,2);
if ($promedio >= 60) {
    echo "<br>Aprobado";
} else {
    echo "<br>Reprobado";
}
?>