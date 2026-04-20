<?php

$notas = [
    'Ana' => 10,
    'João' => 8,
    'Nico' => 7,
    'Vitotas' => 9,
    'Gibson' => null
];

krsort($notas);
var_dump($notas);

if (is_array($notas)) {
    echo 'Sim, é um array.' . PHP_EOL;
}

var_dump(array_is_list($notas));

echo 'Gibson fez a prova: ' . PHP_EOL;
var_dump(isset($notas['Gibson']));

echo 'Alguém tirou 10? ' . PHP_EOL;
var_dump(in_array(10, $notas, true));

echo 'Quem tirou 10?' . PHP_EOL;
echo array_search(10, $notas, true);
