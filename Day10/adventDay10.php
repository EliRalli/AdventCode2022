<?php
// $input = trim(file_get_contents('day10input.txt'));

// $instructions = explode("\n", $input);

// $signals = [1];
// $x = 1;

// $tick = function($wait, $add) use (&$x, &$signals) {
//     while ($wait--) {
//         $cycle = count($signals);
//         $signals[$cycle] = $x * $cycle;
//     }
//     $x += $add;
// };

// foreach ($instructions as $instruction) {
//     @[$command, $add] = explode(' ', $instruction);
//     if ($command == 'noop') {
//         $tick(1, 0);
//     }
//     if ($command == 'addx') {
//         $tick(2, $add);
//     }
// }

// echo
//     $signals[20] +
//     $signals[60] +
//     $signals[100] +
//     $signals[140] +
//     $signals[180] +
//     $signals[220];

function calculateSignalStrength($instructions, $cycle) {
    $x = 1;

    for ($i = 0; $i < $cycle; $i++) {
        $instruction = $instructions[$i % count($instructions)];

        if (strpos($instruction, "addx") === 0) {
            $value = intval(substr($instruction, 5));
            $x += $value;
        } else {
            // noop so nothing
        }
    }

    return $x;
}

$inputFilePath = 'day10input.txt';
$puzzleInput = file($inputFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$signalStrengths = [];
$cyclesToCheck = [ 60, 100, 140, 180, 220];

foreach ($cyclesToCheck as $cycle) {
    $signalStrength = calculateSignalStrength($puzzleInput, $cycle);
    $signalStrengths[] = $cycle * $signalStrength;
    echo "During the $cycle-th cycle, signal strength is" . $cycle * $signalStrength."\n";
}

// Sum of the signal strengths
$sum = array_sum($signalStrengths);
echo "\nThe sum of the signal strengths is $sum.\n";
