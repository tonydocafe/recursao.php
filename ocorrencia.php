<?php

function contarOcorrencias($str, $char, $pos = 0) {
    if ($pos >= strlen($str)) {
        return 0;
    }
    return ($str[$pos] == $char ? 1 : 0) + contarOcorrencias($str, $char, $pos + 1);
}

$texto = readline("Digite uma string: ");
$caractere = readline("Digite um caractere para contar: ");

if (strlen($caractere) != 1) {
    echo "Erro: digite apenas um caractere.\n";
} else {
    echo "O caractere '$caractere' aparece " . contarOcorrencias($texto, $caractere) . " vezes.\n";
}
