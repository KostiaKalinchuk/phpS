<?php

$s = 180; // km
$t = 2; // h
$v1 = $s / $t; // km/h
$v2 = ($s * 1000) / ($t * 3600); // m/s
echo "Швидкість автомобіля на заданій ділянці {$v1} км/г или {$v2} м/с";