<?php

$dados = [
    'nome' => 'Gibson',
    'nota' => 10,
    'idade' => 24,
];

// extraindo os dados do array para variaveis individuais
extract($dados);

// exibindo o valores extraídos
echo "Valores extraídos: ";
var_dump($nome, $nota, $idade);

// recriando um array com as mesmas variaveis
echo "Array recriado com compact(): ";
var_dump(compact('nome', 'nota', 'idade')) . PHP_EOL;

// pequena verificaçao informativa
echo "Resumo: ";
echo "Nome: $nome, Idade: $idade, Nota: $nota ";