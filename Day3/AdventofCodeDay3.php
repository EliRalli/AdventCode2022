<?php

$examplecode = file_get_contents("D:\AdventCode2022\Day3\AdventExample.txt");

$lines=explode("\n", $examplecode);

//find length of each element
// $ascnum = ord($lines);
// if ($ascnum > 64 && $ascnum < 91){

//     return $ascnum -38; //should give the Capital letters
// }
// elseif ( $ascnum > 96 && $ascnum < 123){

//     return $ascnum- 96; // Gives the score values based off the asc2 numbers for lowercase 1-26
// }
//print_r($ascnum);
$score=0;
$array=[];

foreach($lines as $key => $line){
    
    if($line == ""){

        unset($lines[$key]);
    }
    else{

        $count=strlen($line);
        $section1=str_split(substr($line,0,$count/2));
        $section2=str_split(substr($line,$count/2,$count));
        $Items= array_unique(array_intersect($section1,$section2));
        
        foreach($Items as $key => $Item){

            $array[]=$Item;
            print_r($array);
            
        }



    }

}



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