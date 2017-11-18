<?php

require_once __DIR__ . '/2.html';

$a = $_POST['a'];
$arr = array_flip(explode(',', $a));
foreach ($arr as $word => $length) {
    $arr[$word] = mb_strlen($word);
}
asort($arr);
$result = array_slice($arr, -3, 3);

print_r($result);