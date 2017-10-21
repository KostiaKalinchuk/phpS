<?php

$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(1, 100);
}
echo '<p>Початковий масив</p>';
echo '<pre>';
print_r($arr);
echo '</pre>';
$mul = $arr[0];
for ($i = 2; $i < count($arr); $i += 2) {
    if ($arr[$i] > 0) {
        $mul *= $arr[$i];
    }
}
echo "Множення елементів з парними індексами: {$mul}";
echo '<br>';
echo "Елементи з непарними індексами:<br>";
foreach ($arr as $key => $ar) {
    if ($ar > 0 and $key % 2 == 1) {
        echo "[$key] => [$ar] <br> ";
    }
}
