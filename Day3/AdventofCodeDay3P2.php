<?php

$examplecode = file_get_contents("C:\AdventCode2022\Day3\AdventDay3Data.txt");

$lines = explode("\n", $examplecode);

$AlphaArray= [
    'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8, 'i' => 9, 'j' => 10,
    'k' => 11, 'l' => 12, 'm' => 13, 'n' => 14, 'o' => 15, 'p' => 16, 'q' => 17, 'r' => 18, 's' => 19, 't' => 20,
    'u' => 21, 'v' => 22, 'w' => 23, 'x' => 24, 'y' => 25, 'z' => 26,

    'A' => 27, 'B' => 28, 'C' => 29, 'D' => 30, 'E' => 31, 'F' => 32, 'G' => 33, 'H' => 34, 'I' => 35, 'J' => 36,
    'K' => 37, 'L' => 38, 'M' => 39, 'N' => 40, 'O' => 41, 'P' => 42, 'Q' => 43, 'R' => 44, 'S' => 45, 'T' => 46,
    'U' => 47, 'V' => 48, 'W' => 49, 'X' => 50, 'Y' => 51, 'Z' => 52,
];

// seperate the array into groups of three
$array = [];
$score = 0;
$value = ValueofLetter($letters, $AlphaArray);

function ArrayThree($lines){

    $array = [];
    for ($i = 0; $i < count($lines); $i += 3){

        $array[] = [$lines[$i], $lines[$i+1], $lines[$i+2]];
    }
    return $array;
}

$arrayOfThree = ArrayThree($lines);

function Letters($line1, $line2, $line3){
    $letter = '';
    $line1 = str_split($line1);
    $line2 = str_split($line2);
    $line3 = str_split($line3);
    foreach ($line1 as $key => $value){

        if(in_array($value, $line2) && in_array($value,$line3) && in_array($value,$line1)){

            $letter = $value;
        }
    }
    return $letter;
}



function findCommonLetter($array){

    $letters = [];
    foreach ($array as $key => $value){

        $letter=Letters($value[0], $value[1], $value[2]);
        $letters[] = $letter;
    }
    return $letters;
}

$letters = findCommonLetter($arrayOfThree);

function ValueofLetter($letters, $AlphaArray){

    $values = [];
    foreach ($letters as $key => $value) {

        $values[] = $AlphaArray[$value];
    }
    return array_sum($values);
}

// Find the common letter

$arrayThree = ArrayThree($lines);
$letter = findCommonLetter($arrayThree);
$value = ValueofLetter($letters, $AlphaArray);

print_r('Value of the leters is :' . $value . PHP_EOL);

// get the point vlaue of the letters
