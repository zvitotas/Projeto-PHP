<?php

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'três',
    4 => 'quatro',
    5 => 'cinco',
    6 => 'seis',
    7 => 'sete',
    8 => 'oito',
    9 => 'nove',
    10 => 'dez'
];

$contador = 0;

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em português é: $nomeNumero" . PHP_EOL;

    if ($numeral % 2 == 0) {
        echo "Esse número é par." . PHP_EOL;
    } else {
        echo "Esse número é ímpar." . PHP_EOL;
    }

    $contador++;
    echo "Quantidade mostrada até agora: $contador" . PHP_EOL;
    echo "-----------------------------" . PHP_EOL;
}

echo "Total de números no array: " . count($array) . PHP_EOL;
echo "Total contado no foreach: $contador" . PHP_EOL;