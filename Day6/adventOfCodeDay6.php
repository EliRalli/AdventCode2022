<?php

// $example = 'mjqjpqmgbljsphdztnvjfqwrcgsmlb';

// // $exampleArray = str_split($example, 1);
// $exampleArray = str_split($example, strlen($example));
// print_r($exampleArray);

$example = 'mjqjpqmgbljsphdztnvjfqwrcgsmlb';
$exampleArray = str_split($example);
echo implode(' ', $exampleArray);
echo $exampleArray[0];
