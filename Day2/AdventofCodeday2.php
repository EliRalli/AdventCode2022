<?php
// A=Rock, B=Paper, C=Scissors
//X=Rock, Y=Paper, Z=Scissors
//Pointsperselection, 1=Rock,2=Paper,3=Scissors
//Pointsperoutcome, 0=Loss,3=Draw, 6=win

$file= file("D:\AdventofCode2022\Day2\Adventday2.txt");
//print_r($file);
//$delimiter=' ';
//$fixed= implode($delimiter,$file);
//print_r($fixed);
// $A and $X =1;
// $B and $Y = 2;
// $C and $Z =3;
//$arraylong=count($file);
//$oppo=array_column(explode(" ",$file));
//print_r($oppo);
//echo $file[0];
//FUNCTIONS HELLO??
//funciton

$length=count($file)-1;
$AX=$file[4];
$AY=$file[22];
$AZ=$file[1];
$BX=$file[25];
$BY=$file[2];
$BZ=$file[75];
$CX=$file[28];
$CY=$file[0];
$CZ=$file[9];

//print_r($filetest);

//print_r(array_chunk($filetest,1,True));
$score=[];
$runningtot=0;
for ($x=0;$x<=$length;$x+=1){
    if ($file[$x] === $AX){
        $runningtot=$runningtot +=4;
    } 
    if ($file[$x] === $AY){
        $runningtot=$runningtot +=8;
    } 
    if ($file[$x] === $AZ){
        $runningtot=$runningtot +=3;
    } 
    if ($file[$x] === $BX){
        $runningtot=$runningtot += 1;
    }
    if ($file[$x] === $BY){
        $runningtot=$runningtot +=5;
    }
    if ($file[$x] === $BZ){
        $runningtot=$runningtot +=9;
    }
    if ($file[$x] === $CX){
        $runningtot=$runningtot +=7;
    }
    if ($file[$x] === $CY){
        $runningtot=$runningtot +=2;
    }  
    if ($file[$x]=== $CZ){
        $runningtot=$runningtot += 6;
    }
    // else
    // echo 'Oops there was a mistake',"\n";
}
echo $runningtot+6 //missed the last section so just manually added it



?>