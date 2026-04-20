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
    return $nota2['nota'] <=> $nota1['nota'];
}

usort($notas, 'ordenaNotas');
var_dump($notas);
