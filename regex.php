<?php

$telefones = ['(54) 9922 - 7671', '(54) 9945 - 9168', '(54) 9810 - 5499'];

foreach ($telefones as $telefone) {
    $regex = '/^\(([0-9]{2})\) ([0-9]{4,5} - [0-9]{4})$/';

    $telefoneValido = preg_match(
        $regex,
        $telefone,
        $correspondencia
    );

    if ($telefoneValido) {
        echo 'Telefone válido' . PHP_EOL;
    } else {
        echo 'Telefone inválido' . PHP_EOL;
    }

    echo preg_replace(
        $regex,
        '(XX) \2',
        $telefone
    ) . PHP_EOL;
}