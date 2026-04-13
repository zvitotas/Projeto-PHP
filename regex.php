<?php

$telefones = ['(54) 9922 - 7671', '(54) 9945 - 9168', '(54) 9810 - 5499'];

foreach ($telefones as $telefone) {
    $telefoneValido = preg_match('/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/', $telefone);
    if($telefoneValido) {
        echo 'Telefone válido' . PHP_EOL;
    } else {
        echo 'Telefone inválido' . PHP_EOL;
    }
}