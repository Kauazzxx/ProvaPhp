<?php
 
$lista = [];
$lista1 = [1, 'a', 23, 56, 'ou', 'i', 'O', 's', 'W', 13, 9, 74, 55, 'm', 'z', 'e', 'u', 'ç', 'l', 'b', 9];
 
$usuarioSenha = (int) readline("Me fale um número de 1 a 10 para a senha: ");
 
for ($i = 0; $i < $usuarioSenha; $i++) {
    $itemAleatorio = $lista1[rand(0, count($lista1) - 1)];
    $lista[] = $itemAleatorio;
    echo $itemAleatorio;
}
 
echo "\n";
