<?php

$input = file_get_contents('AdventDay5Example.txt');

[$stack, $procedure] = explode("\r\n\r\n", $input);

//print_r($stack);
//print_r($procedure);

$procedure = explode(" ", $procedure);
print_r($procedure);