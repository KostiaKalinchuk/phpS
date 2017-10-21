<?php

$arr = ['green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой'];
foreach ($arr as $itemEn => $itemRu) {
    $en[] = $itemEn;
    $ru[] = $itemRu;
}
echo '<pre>';
print_r($en);
echo '</pre>';
echo '<pre>';
print_r($ru);
echo '</pre>';
