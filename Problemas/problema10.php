<?php
$valor1 = (int)$_POST['txt_valor1'];
$valor2 = (int)$_POST['txt_valor2'];

    echo "<hr>";
    echo "<br> Valores ingresados:";
    echo "<br> Valor 1: ". $valor1;
    echo "<br> Valor 2: ". $valor2;
    echo "<hr>";

    if ($valor1 == $valor2) {
        echo "<br>Los valores ingresados son iguales. D:";
    } else {
        $menor = min($valor1, $valor2);
        $mayor = max($valor1, $valor2);
    
        echo "<br>Números del numero menor al mayor son: ";
        for ($i = $menor; $i <= $mayor; $i++) {
            echo "<br>" . $i;
        }
    }

?>