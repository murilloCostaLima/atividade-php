<?php
    $valor1 = "2"; 
    $valor2 = "656"; 
    if (is_numeric($valor1) && is_numeric($valor2))
    {
        $soma = $valor1 + $valor2; 
        echo "Resultado: $soma";
    } 
    else
    {
        echo "Erro: O valor deve conter apenas números.";
    } 
?>