<?php

$start = 1;
$end = 4;

var_dump($start + $end);
var_dump(3 + 3 );
echo '<br>';

$t1 = 3;
$t1 = $t1 + 3;
var_dump($t1);
echo '<br>';


$t1++;
$t1--;
--$t1;
++$t1;
var_dump($t1);

$t2 = 1;
$t3 = 3;
var_dump($t2 + $t3++);
var_dump($t2++ + ++$t3);

var_dump($t2++);