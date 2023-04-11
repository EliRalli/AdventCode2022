<?php
$input = file_get_contents('AdventDay5Example.txt');
$inputArray = explode("\r\n\r\n", $input);
$diagram = $inputArray[0];
$rows = explode("\r\n", $diagram);
$rows = array_reverse($rows);
$moves = explode("\r\n", $inputArray[1]);
$table = array();
$rowNum = 1;

foreach ($rows as $row) { 

    $colNum = 1;
    
    for ($i = 1; $i <= strlen($row); $i += 4) {

        $char = substr($row, $i, 1);
        $table[$colNum][$rowNum] = $char;
        $colNum ++;
    }
    $rowNum ++;
}
$numCols = count($table);

for ($i = 1; $i <= $numCols; $i ++) {

    $col = $table[$i];
    $numRows = count($col);

    for ($j = 1; $j <= $numRows; $j ++) {

        if ($col[$j] == " ") {

            unset($table[$i][$j]);
        }
    }
}

foreach ($moves as $move) {
    
    $move = str_replace("move ", "", $move);
    $move = str_replace(" from", "", $move);
    $move = str_replace("to ", "", $move);
    $moveArray = explode(" ", $move);  
    $items = array();

    for ($i = 0; $i < $moveArray[0]; $i ++) {

        array_push($items, array_pop($table[$moveArray[1]]));
    }
    $items = array_reverse($items);

    foreach ($items as $item) {

        array_push($table[$moveArray[2]], $item);
    }
}

foreach ($table as $col) {

    echo array_pop($col);
}
?>