<?php

$notasBimestre1 = [
    'Ana' => 10,
    'João' => 8,
    'Nico' => 7,
    'Vitotas' => 9,
    'Gibson' => 6,
];

$notasBimestre2 = [
    'Gibson' => 6,
    'Ana' => 9,
    'Nico' => 7,
    'João' => 8,
    'Vitotas' => 10,
];

$alunosFaltantes = array_diff_assoc($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

var_dump(array_combine($notasAlunos, $nomesAlunos));
var_dump(array_flip($alunosFaltantes));





