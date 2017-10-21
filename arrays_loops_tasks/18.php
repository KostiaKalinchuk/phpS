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
$weekend = [
    'saturday',
    'sunday'
];
foreach ($days as $day) {
    if (in_array($day, $weekend)){
        echo "<strong>{$day}</strong><br>";
    }else {
        echo "{$day}<br>";
    }
}
//echo in_array($day, $weekend) ? "<strong>{$day}</strong><br>\n" : "{$day}<br>\n";