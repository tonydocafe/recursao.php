<?php

function fibonacci($n) {
    if ($n <= 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}

$termo = (int)readline("Digite o termo desejado da sequência de Fibonacci: ");
echo "O termo $termo da sequência de Fibonacci é " . fibonacci($termo) . "\n";
