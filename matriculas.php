<?php

$alunos2025 = [
0 => 'Ana',
1 => 'João',
2 => 'Nico', 
3 => 'Vitotas', 
4 => 'Gibson', 
];

$novosAlunos = [
5 => 'Patricia',
6 => 'Kiko',
7 => 'Cleberson',
8 => 'Clodoaldo',
];

$alunos2026 = [...$alunos2025, 'Miguelito', ...$novosAlunos];
array_push($alunos2026, 'Alice', 'Bob', 'Charlie');
$alunos2022[] = 'Luiz';

array_unshift($alunos2026, 'Stephane', 'Rafaela');

echo array_shift($alunos2026);

var_dump($alunos2026);


// funcao(...[1, 2, 3]);

// function funcao(int $a, int $b, int $c)
/* {

}*/

// var_dump($alunos2026 = array_merge($alunos2025, $novosAlunos)) . PHP_EOL;