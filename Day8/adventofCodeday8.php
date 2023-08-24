<?php
$input = [
    [3, 0, 3, 7, 3],
    [2, 5, 5, 1, 2],
    [6, 5, 3, 3, 2],
    [3, 3, 5, 4, 9],
    [3, 5, 3, 9, 0],
];

$visibleCount = 0;
$height = count($input);
$width = count($input[0]);

for ($row = 0; $row < $height; $row++) {
    for ($col = 0; $col < $width; $col++) {
        $treeHeight = $input[$row][$col];

        $visible = true;

        for ($r = 0; $r < $row; $r++) {
            if ($input[$r][$col] >= $treeHeight) {
                $visible = false;
                break;
            }
        }

        if ($visible) {
            for ($r = $row + 1; $r < $height; $r++) {
                if ($input[$r][$col] >= $treeHeight) {
                    $visible = false;
                    break;
                }
            }
        }

        if ($visible) {
            for ($c = 0; $c < $col; $c++) {
                if ($input[$row][$c] >= $treeHeight) {
                    $visible = false;
                    break;
                }
            }
        }

        if ($visible) {
            for ($c = $col + 1; $c < $width; $c++) {
                if ($input[$row][$c] >= $treeHeight) {
                    $visible = false;
                    break;
                }
            }
        }

        if ($visible) {
            $visibleCount++;
        }
    }
}

echo "Number of visible trees: $visibleCount\n";
?>

