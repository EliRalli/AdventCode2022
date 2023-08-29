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
