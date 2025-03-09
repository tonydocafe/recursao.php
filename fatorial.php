<?php

function fatorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * fatorial($n - 1);
}

$numero = (int)readline("Digite um número para calcular o fatorial: ");

if ($numero < 0) {
    echo "Erro: o número deve ser não negativo.\n";
} else {
    echo "O fatorial de $numero é " . fatorial($numero) . "\n";
}
