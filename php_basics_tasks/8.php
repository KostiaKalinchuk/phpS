<?php

$age = -5;

if (!is_numeric($age) || $age < 0) {
    echo 'Невідомий вік';
} elseif ($age <= 17) {
    echo 'Мені ще рано працювати';
} elseif ($age <= 59) {
    echo 'Мені ще працювати і працювати';
} else {
    echo 'Мені пора на пенсію';
}