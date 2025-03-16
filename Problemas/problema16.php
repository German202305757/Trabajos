<?php
$numero = (int) $_POST['txt_numero']; 

if ($numero <= 1) {
    echo "El número $numero NO es primo.";
} else {
    $esPrimo = true;

    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $esPrimo = false;
            break;
        }
    }

    if ($esPrimo) {
        echo "El número $numero es PRIMO.";
    } else {
        echo "El número $numero NO es primo.";
    }
}
?>
