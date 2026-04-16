<?php

$notas = [

        ['aluno' => 'Miguelito',
    'nota' => 10,],

        ['aluno' => 'Nico',
    'nota' => 6,],

        ['aluno' => 'Clovis',
    'nota' => 9,],

];

function ordenaNotas(array $nota1, array $nota2): int
{
    if ($nota1['nota'] > $nota2['nota']) {
        return -1;
    }

    if ($nota2['nota'] > $nota1['nota']) {
        return 1;
    }

    if ($nota1 === $nota2) {
        return 0;
    }
}

usort($notas, 'ordenaNotas');
var_dump($notas);
