<?php

function somaDigitos($num) {
    if ($num == 0) {
        return 0;
    }
    return ($num % 10) + somaDigitos((int)($num / 10));
}

$numero = (int)readline("Digite um número: ");
echo "A soma dos dígitos de $numero é " . somaDigitos($numero) . "\n";
