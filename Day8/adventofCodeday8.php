<?php

$input = array_map(fn ($x) => str_split(trim($x), 1), file('adventday8input.txt'));

function visible_col($row, $col, $input)
{
    $treeValue = $input[$row][$col];
    $visible = true;
    for ($i = $col - 1; $i >= 0; $i--) {
        $visible = $visible && ($treeValue > $input[$row][$i]);
    }
    if ($visible) return true;
    $visible = true;
    for ($i = $col + 1; $i < count($input[$row]); $i++) {
        $visible = $visible && ($treeValue > $input[$row][$i]);
    }
    return $visible;
}

function visible_row($row, $col, $input)
{
    $treeValue = $input[$row][$col];
    $visible = true;
    for ($i = $row - 1; $i >= 0; $i--) {
        $visible = $visible && ($treeValue > $input[$i][$col]);
    }
    if ($visible) return true;
    $visible = true;
    for ($i = $row + 1; $i < count($input); $i++) {
        $visible = $visible && ($treeValue > $input[$i][$col]);
    }
    return $visible;
}

$visibleTrees = 0;

for ($row = 0; $row < count($input); $row++) {
    for ($col = 0; $col < count($input[$row]); $col++) {
        if (visible_col($row, $col, $input) || visible_row($row, $col, $input)) {
            $visibleTrees++;
        }
    }
}
echo "Visible trees: $visibleTrees\n";

//part2

function up($row, $col, $input)
{
    if ($row == 0) return 0;
    $count = 1;
    $savedValue = $input[$row][$col];
    while (true) {
        $row--;
        if ($row <= 0) return $count;
        if ($input[$row][$col] < $savedValue) {
            $count++;
        } else {
            return $count;
        }
    }
}

function down($row, $col, $input)
{
    if ($row == count($input)-1) return 0;
    $count = 1;
    $savedValue = $input[$row][$col];
    while (true) {
        $row++;
        if ($row >= count($input)-1) return $count;
        if ($input[$row][$col] < $savedValue) {
            $count++;
        } else {
            return $count;
        }
    }
}

function left($row, $col, $input)
{
    if ($col == 0) return 0;
    $count = 1;
    $savedValue = $input[$row][$col];
    while (true) {
        $col--;
        if ($col <= 0) return $count;
        if ($input[$row][$col] < $savedValue) {
            $count++;
        } else {
            return $count;
        }
    }
}

function right($row, $col, $input)
{
    if ($col == count($input[$row])-1) return 0;
    $count = 1;
    $savedValue = $input[$row][$col];
    while (true) {
        $col++;
        if ($col >= count($input[$row])-1) return $count;
        if ($input[$row][$col] < $savedValue) {
            $count++;
        } else {
            return $count;
        }
    }
}

$high = 0;
for ($row = 0; $row < count($input); $row++) {
    for ($col = 0; $col < count($input[$row]); $col++) {
        $scenic = up($row, $col, $input) * down($row, $col, $input) *
            left($row, $col, $input) * right($row, $col, $input);
        if ($scenic > $high) $high = $scenic;
    }
}
echo "Highest scenic score: $high\n";