<?php

$days = [
    'monday',
    'tuesday',
    'wednesday',
    'thursday',
    'friday',
    'saturday',
    'sunday'
];
$day = $days[date('N') - 1];
foreach ($days as $value) {
    if ($value == $day){
        echo "<em>{$value}</em><br>";
    }else {
        echo "{$value}<br>";
    }
}