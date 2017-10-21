<?php

$rows = rand(2, 10);
$cols = rand(2, 10);
$colors = ['red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green'];
echo '<table border="1">';
for ($tr = 1; $tr <= $rows; $tr++) {
    echo '<tr>';
    for ($td = 1; $td <= $cols; $td++) {
        $number = rand();
        $i = $colors[rand(0, count($colors) - 1)];
        echo "<td style='background-color:{$i}'>" . $number . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
