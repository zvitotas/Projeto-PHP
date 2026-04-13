<?php

$trans = ["hello" => "hi", "hi" => "hello"];
echo strtr("hi all, i said hello", $trans) . PHP_EOL;

echo str_replace(['hello', 'hi'], ['hi', 'hello'], "hi all, i said hello") . PHP_EOL;