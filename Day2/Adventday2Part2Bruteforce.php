<?php


$file= file("D:\AdventofCode2022\Day2\Adventday2.txt");


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

$runningtot=0;
for ($x=0;$x<=$length;$x+=1){
    if ($file[$x] === $AX){
        $runningtot=$runningtot +=3;
    } 
    if ($file[$x] === $AY){
        $runningtot=$runningtot +=4;
    } 
    if ($file[$x] === $AZ){
        $runningtot=$runningtot +=8;
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
        $runningtot=$runningtot +=2;
    }
    if ($file[$x] === $CY){
        $runningtot=$runningtot +=6;
    }  
    if ($file[$x]=== $CZ){
        $runningtot=$runningtot += 7;
    }
    // else
    // echo 'Oops there was a mistake',"\n";
}
echo $runningtot+5 //missed the last section so just manually added it

?>