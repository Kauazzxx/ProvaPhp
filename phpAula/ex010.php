<?php
function calcularAumento($nome, $salario, $idade) {
    if ($idade > 50) {
        $percentual = 0.06;
    } elseif ($idade > 40) {
        $percentual = 0.04;
    } elseif ($idade > 30) {
        $percentual = 0.03;
    } else {
        $percentual = 0.0;
    }
 
    $aumento = $salario * $percentual;
    $salarioComBonus = $salario + $aumento;
 
    $aumentoFormatado = number_format($aumento, 2, ',', '.');
    $salarioFormatado = number_format($salarioComBonus, 2, ',', '.');
 
    return "Bem-vindo(a) $nome, sua idade é $idade e portanto você receberá um aumento de R$$aumentoFormatado, totalizando R$$salarioFormatado.";
}
 
echo calcularAumento("João", 3000, 35);
?>