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
$alunos2026[] = 'Luiz';

array_unshift($alunos2026, 'Stephane', 'Rafaela');

echo array_shift($alunos2026) . PHP_EOL;
echo array_pop($alunos2026) . PHP_EOL;

var_dump($alunos2026);

$alunos2027 = [...$alunos2026, 'Fernando', 'Carlos'];

array_push($alunos2027, 'Bruna', 'Juliana');
$alunos2027[] = 'Marcos';

array_unshift($alunos2027, 'Beatriz', 'Camila');

echo array_shift($alunos2027) . PHP_EOL;
echo array_pop($alunos2027) . PHP_EOL;

echo "Lista final de alunos 2027:" . PHP_EOL;
var_dump($alunos2027);