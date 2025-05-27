<?php
 
function calcularEnvio($peso, $larg, $alt, $prof, $dist, $tipo) {
    $vol = $larg * $alt * $prof;
    $pesoFinal = max($peso, $vol / 6000);
 
    $taxa = $tipo === 'express' ? 0.10 : 0.05;
    $min = $tipo === 'express' ? 30 : 15;
 
    $custo = $pesoFinal * $dist * $taxa;
    return round(max($custo, $min), 2);
}
 
echo "R$ " . calcularEnvio(2.5, 30, 20, 15, 300, 'economico');
?>
