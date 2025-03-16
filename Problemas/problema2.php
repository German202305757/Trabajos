<?php
if (isset($_POST['txt_numerosolicitado'])) {
    $numerosolicitado = $_POST['txt_numerosolicitado'];

    echo "<br>El número ingresado es: $numerosolicitado";

    if (is_numeric($numerosolicitado)) {
        $numerosolicitado = (int) $numerosolicitado;

        if ($numerosolicitado % 2 == 0) {
            echo "<br>El número es: Par";
        } else {
            echo "<br>El número es: Impar";
        }
    }
    }
?>
