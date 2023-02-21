<?php

$input = array_map('trim', file("C:\AdventCode2022\Day4\AdventDay4Example.txt"));

$part1 = $part2 = 0;

foreach ($input as $pairs) {
    [$num1, $num2] = explode(',', $pairs);
    $r1 = explode('-', $num1);
    $r2 = explode('-', $num2);
    if (((int)$r1[0] >= (int)$r2[0] && (int)$r1[1] <= (int)$r2[1]) || ((int)$r2[0] >= (int)$r1[0] && (int)$r2[1] <= (int)$r1[1])) {
        
        $part1++;
    }
    if (!empty(array_intersect(range($r1[0], $r1[1]), range($r2[0], $r2[1])))) {
        $part2++;
    }
}
echo "Totals:\n  Part 1: $part1\n Part 2: $part2\n";




// print_r($lines[0]);

// $lines2 = explode(",", $lines[0]);

// print_r($lines2);


