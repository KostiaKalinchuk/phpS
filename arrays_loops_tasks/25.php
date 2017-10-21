<?php

$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[] = rand(1, 50);
}
echo '<p>Початковий масив</p>';
echo '<pre>';
print_r($arr);
echo '</pre>';

$indexMax = array_search(max($arr), $arr);
$indexMin = array_search(min($arr), $arr);
echo "<p>Максимальне значення: {$arr[$indexMax]}</p>";
echo "<p>Мінімальне значення: {$arr[$indexMin]}</p>";

// Міняємо місцями
$arr[$indexMax] = $arr[$indexMax] + $arr[$indexMin] - ($arr[$indexMin] = $arr[$indexMax]);
echo '<p>Отриманий масив</p>';
echo '<pre>';
print_r($arr);
echo '</pre>';