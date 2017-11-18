<?php

function unique($arg)
{
    $b = explode(' ', mb_strtolower($arg));
    echo 'Всього слів - ' . count($b);
    $b = array_unique($b);
    echo '; Унікальних слів - ' . count($b);
}

require '10.html';
unique($_POST['text']);