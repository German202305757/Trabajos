<?php
$texto = $_POST['txt_texto'];

echo "<h3>Texto ingresado:</h3>";
echo "<p>$texto</p>";

echo "<h3>Texto en forma vertical:</h3>";
for ($i = 0; $i < strlen($texto); $i++) {
    echo $texto[$i] . "<br>";
}
?>