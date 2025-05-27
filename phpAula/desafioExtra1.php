<?php
function calculadora($valor1,$valor2,$operador){
  
    if ($operador == '+'){
        $resultado =  $valor1 + $valor2;
        echo "O Valor final é: $resultado ";
    }
    elseif ($operador == '-'){
        $resultado =  $valor1 - $valor2;
        echo "O Valor final é: $resultado ";
    }
    elseif ($operador == '*'){
        $resultado =  $valor1 - $valor2;
        echo "O Valor final é: $resultado ";
    }
    elseif ($operador == '/'){
        $resultado =  $valor1 / $valor2;
        echo "O Valor final é: $resultado ";
    }else{
        $resultado =  $valor1 ** $valor2;
        echo "O Valor final é: $resultado ";
    }
}

calculadora(2,2,"+");