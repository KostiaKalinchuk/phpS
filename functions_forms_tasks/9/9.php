<?php

function reverse($arg)
{
    $b='';
    for ($i = strlen($arg) - 1; $i >= 0; $i--) {
        $b .= $arg[$i];
    }
    return $b;
}
require '9.html';
echo reverse($_POST['text1']);