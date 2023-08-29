<?php
// model rope physics
//knot each end, head and tail marked by knot modelled on a 2-D grid
//hypothetical series of movements(input) determine how the tail move
//head(H) and Tail(T) must always be touching (diagonal/ adjacent/overlapping)
//puzzle gives us the input of the head movement
//find how many positions the tail visited at least once
$gridSize = 1000;
$center = $grid/2;
$grid = array_fill(0,$gridSize,array_fill(0, $gridSize, '.'));
// Initialize grid dimensions and starting position

// Initial positions of head and tail
$headX = $center;
$headY = $center;
$tailX = $center;
$tailY = $center;

// Mark the starting position as visited by tail
$grid[$tailY][$tailX] = '#';

// Example motion commands
$motions = [
    'R 4', 'U 4', 'L 3', 'D 1', 'R 4', 'D 1', 'L 5', 'R 2'
];

foreach ($motions as $motion) {
    list($direction, $steps) = explode(' ', $motion);
    
    // Update head position based on the motion command
    switch ($direction) {
        case 'R': $headX += $steps; break;
        case 'L': $headX -= $steps; break;
        case 'U': $headY -= $steps; break;
        case 'D': $headY += $steps; break;
    }
    
    // Update tail position if needed
    if (abs($headX - $tailX) > 1 || abs($headY - $tailY) > 1) {
        $tailX = $headX;
        $tailY = $headY;
    }
    
    // Mark visited positions by tail
    $grid[$tailY][$tailX] = '#';
}

// Count the number of positions visited by tail
$visitedCount = 0;
foreach ($grid as $row) {
    $visitedCount += count(array_filter($row, function($cell) {
        return $cell === '#';
    }));
}

echo "Positions visited at least once: $visitedCount\n";
