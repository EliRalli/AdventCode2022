<?php

$examplecode = file_get_contents("C:\AdventCode2022\Day3\AdventExample.txt");

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
$letter = '';
function ValueofLetter($letters, $AlphaArray){

    $values = [];
    foreach ($letters as $key => $value) {

        $values[] = $AlphaArray[$value];
    }
    return array_sum($values);
}

for ($i = 0; $i < count($lines); $i += 3){

    $array[] = [$lines[$i], $lines[$i+1], $lines[$i+2]];

    $line1 = str_split($line[$i]);
    $line2 = str_split($line[$i+1]);
    $line3 = str_split($line[$i+2]);
    foreach ($line1 as $key => $value){

        if(in_array($value, $line2) && in_array($value,$line3) && in_array($value,$line1)){

            $letter = $value;
        }
    }

    foreach ($array as $key => $value){

        $letter= 
        $letters[]=$letter;
    }

}
return $array;


// Find the common letter

// get the point vlaue of the letters
