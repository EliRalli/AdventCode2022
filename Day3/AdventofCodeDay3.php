<?php

$examplecode = file("D:\AdventCode2022\Day3\AdventExample.txt");
//find length of each element

print_r($examplecode);

//split it halfway
function ElementSplitter($examplecode): array{
    $SplitElements=array_chunk($examplecode,count($examplecode)/2);
    echo $SplitElements;
    return $SplitElements;

}
//find the common letter


//assign score to the letter based on the key..... don't make array for each number yet... ASCII?
function GetValues() {
    $ascnum = mb_ord($SplitElements);
    if ($ascnum > 64 & $ascnum < 91){
        return $ascnum -38;
    }
    elseif ( $ascnum > 96 & $ascnum < 123){
        return $ascnum- 96;
    }
    

}


//sum all the scores together



?>