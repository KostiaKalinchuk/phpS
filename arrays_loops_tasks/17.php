<?php

$months = [
    1 => 'січень',
    2 => 'лютий',
    3 => 'березень',
    4 => 'квітень',
    5 => 'травень',
    6 => 'червень',
    7 => 'липень',
    8 => 'серпень',
    9 => 'вересень',
    10 => 'жовтень',
    11 => 'листопад',
    12 => 'грудень'
];
$month = $months[date('n')];
foreach ($months as $value) {
   if ($value == $month){
       echo "<b>{$value}</b><br>";
   }else {
      echo "{$value}<br>";
   }
}

//echo $value == $month ? "<b>{$value}</b><br>" : "{$value}<br>";