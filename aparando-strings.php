<?php

$csv = ',.Victor Rodrigues,15,.';

echo trim($csv, ',.') . PHP_EOL;
echo ltrim($csv, ',.') . PHP_EOL;
echo rtrim($csv, ',.') . PHP_EOL;