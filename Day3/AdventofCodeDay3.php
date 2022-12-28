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

$score = 0;
$array = [];

foreach($lines as $key => $line){
    
    if($line == ""){

        unset($lines[$key]);
    }
    else{

        $count = strlen($line);
        $section1 = str_split(substr($line,0,$count/2));
        $section2 = str_split(substr($line,$count/2,$count));
        $Items = array_unique(array_intersect($section1,$section2));
        $Items = array_map(function($item) use ($AlphaArray) {
            return $AlphaArray[$item];
        }, $Items);
        foreach($Items as $key => $Item){

            $array[]=$Item;
            //print_r($array);
            
        }



    }

}

print_r("The value is:". array_sum($array). PHP_EOL);

?>