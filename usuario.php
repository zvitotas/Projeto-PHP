<?php

$nome = "Victor rodrigues";
$email = "victor@alura.com.br";
$senha = "í";

if (strlen($senha)< 8) {
    echo "Senha insegura"  . PHP_EOL;
} else {
    echo "Senha segura" . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@', );

$usuario = substr($email, 0, $posicaoDoArroba);

echo strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome:' . $nome . PHP_EOL;
echo 'Sobrenome:' . $sobrenome . PHP_EOL;

$csv = 'Victor Dias,15,victor@alura.com.br';
var_dump(explode(',', $csv));