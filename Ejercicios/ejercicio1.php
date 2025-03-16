<?php
$dpi = $_POST['txt_DPI'];
$apellido = $_POST['txt_apellido'];
$nombre = $_POST['txt_nombre'];
$correo = $_POST['txt_correo'];
$fecha = $_POST['txt_fecha'];
$genero = $_POST['opt_genero'];

echo "<table border='1' style='width: 50%; margin: left; text-align: left;'>";
echo "<tr><th>Campo</th><th>Datos</th></tr>";
echo "<tr><td>DPI</td><td>$dpi</td></tr>";
echo "<tr><td>Nombre</td><td>$nombre</td></tr>";
echo "<tr><td>Apellido</td><td>$apellido</td></tr>";
echo "<tr><td>Género</td><td>$genero</td></tr>";
echo "<tr><td>Fecha de Nacimiento</td><td>$fecha</td></tr>";
echo "<tr><td>Correo Electrónico</td><td>$correo</td></tr>";
echo "</table>";
?>