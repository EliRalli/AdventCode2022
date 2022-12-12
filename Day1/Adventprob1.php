<?php
//echo 'hello world';
$file= file("D:\AdventofCode2022\Day1\Adventprob1.txt"); //getting the text file
//echo ($txtfile);
//$txt = explode( "\n",$str);
//print_r($str);
//$str2=empty($str);
$totals=[];
$runningtot=0;
foreach ($file as $key => $value){
    $value = trim($value);
    if (empty($value)){
        $totals[]=$runningtot;
        $runningtot=0;
    }
    else
        $runningtot += $value;
}
rsort($totals);
$topthree= $totals[0]+ $totals[1]+$totals[2];
echo "The answer is" . $topthree ;

?>