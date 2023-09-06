<?php
// model rope physics
//knot each end, head and tail marked by knot modelled on a 2-D grid
//hypothetical series of movements(input) determine how the tail move
//head(H) and Tail(T) must always be touching (diagonal/ adjacent/overlapping)
//puzzle gives us the input of the head movement
//find how many positions the tail visited at least once

$gridSize = 5000;
$center = $gridSize / 2; // Center of the grid
$grid = array_fill(0, $gridSize, array_fill(0, $gridSize, '.'));

// Initial positions of head and tail
$headX = $center;
$headY = $center;
$tailX = $center;
$tailY = $center;

// Mark the starting position as visited by tail
$grid[$tailY][$tailX] = '#';

// Open the file for reading
$file = fopen('adventDay9input.txt', 'r');

if ($file) {
    while (($line = fgets($file)) !== false) {
        list($direction, $steps) = explode(' ', trim($line));
        
        switch ($direction) {
            case 'R': $headX += $steps; break;
            case 'L': $headX -= $steps; break;
            case 'U': $headY -= $steps; break;
            case 'D': $headY += $steps; break;
        }
        
        if (abs($headX - $tailX) > 1 || abs($headY - $tailY) > 1) {
            $tailX = $headX;
            $tailY = $headY;
        }
        
        $grid[$tailY][$tailX] = '#';
    }
    
    fclose($file);
    
    $visitedCount = 0;
    foreach ($grid as $row) {
        $visitedCount += count(array_filter($row, function($cell) {
            return $cell === '#';
        }));
    }
    
    echo "Positions visited at least once: $visitedCount\n";
} else {
    echo "Error opening the file.\n";
}

