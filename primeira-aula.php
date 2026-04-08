<?php

$nome = "Victor Rodrigues";

$ehDaMinhaFamilia = str_contains($nome, "Rodrigues");

if ($ehDaMinhaFamilia) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}

