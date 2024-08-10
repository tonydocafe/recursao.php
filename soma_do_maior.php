<?php

function intervalo($maior, $menor) {
    if ($maior == $menor) {
        return $menor;
    } else {
        return $maior + intervalo($maior - 1, $menor);
    }
}

$maior = (int)readline("Digite o maior número: ");
$menor = (int)readline("Digite o menor número: ");

if ($maior < $menor) {
    echo "Erro: o maior número deve ser maior ou igual ao menor número.\n";
} else {
    echo "A soma do intervalo é igual a " . intervalo($maior, $menor) . "\n";
}
