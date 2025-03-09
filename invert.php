<?php

function inverterString($str) {
    if (strlen($str) <= 1) {
        return $str;
    }
    return inverterString(substr($str, 1)) . $str[0];
}

$texto = readline("Digite uma string: ");
echo "String invertida: " . inverterString($texto) . "\n";
