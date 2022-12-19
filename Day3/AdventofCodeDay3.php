<?php

$examplecode = file_get_contents("D:\AdventCode2022\Day3\AdventDay3Data.txt");

$lines = explode("\n", $examplecode);

//find length of each element

// $Alpharray = Array();
// $numarray = range(1,52,1);
// for($i = 65; $i < 123; $i++){
    
//     if ($i > 96 & $i < 123){

//         $Alpharray[]=chr(($i)); //should give the Capital letters
//     }
//     elseif ( $i > 64 & $i < 91 ){

//         $Alpharray[]=chr($i); // Gives the score values based off the asc2 numbers for lowercase 1-26
//     }
//     //$Alpharray[]=chr($i);
//     //print_r($Alpharray);
// }
$AlphaArray= [
    'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8, 'i' => 9, 'j' => 10,
    'k' => 11, 'l' => 12, 'm' => 13, 'n' => 14, 'o' => 15, 'p' => 16, 'q' => 17, 'r' => 18, 's' => 19, 't' => 20,
    'u' => 21, 'v' => 22, 'w' => 23, 'x' => 24, 'y' => 25, 'z' => 26,

    'A' => 27, 'B' => 28, 'C' => 29, 'D' => 30, 'E' => 31, 'F' => 32, 'G' => 33, 'H' => 34, 'I' => 35, 'J' => 36,
    'K' => 37, 'L' => 38, 'M' => 39, 'N' => 40, 'O' => 41, 'P' => 42, 'Q' => 43, 'R' => 44, 'S' => 45, 'T' => 46,
    'U' => 47, 'V' => 48, 'W' => 49, 'X' => 50, 'Y' => 51, 'Z' => 52,
]; 

//print_r(array_change_key_case($Alpharray, CASE_UPPER));
// $ascnum = ord($lines);
// if ($ascnum > 64 && $ascnum < 91){

//     return $ascnum -38; //should give the Capital letters
// }
// elseif ( $ascnum > 96 && $ascnum < 123){

//     return $ascnum- 96; // Gives the score values based off the asc2 numbers for lowercase 1-26
// }
//print_r($ascnum);
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
//$arrayinter=array_intersect_key($array,$AlphaArray);
//print_r($arrayinter);
print_r("The value is:". array_sum($array). PHP_EOL);

//split it halfway
// function ElementSplitter($examplecode): array{

//     $SplitElements=array_chunk($examplecode,count($examplecode)/2);
//     echo $SplitElements;
//     return $SplitElements;

// }
// //find the common letter


// //assign score to the letter based on the key..... don't make array for each number yet... ASCII?
// function GetValues() {

//     $ascnum = mb_ord($SplitElements);
//     if ($ascnum > 64 && $ascnum < 91){
//         return $ascnum -38; //should give the Capital letters
//     }
//     elseif ( $ascnum > 96 && $ascnum < 123){
//         return $ascnum- 96; // Gives the score values based off the asc2 numbers for lowercase 1-26
//     }
    

// }


//sum all the scores together



?>