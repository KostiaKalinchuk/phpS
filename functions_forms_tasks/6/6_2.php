<?php

$tmpName = $_FILES['upload']['tmp_name'];
$gallery = 'gallery/' . time() . basename($_FILES['upload']['name']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_FILES['upload']['error'] == 0) {
        move_uploaded_file($tmpName, $gallery);
    }
}

$imgDir = 'gallery/';

function getFilesImg($path)
{
    $files = scandir($path);
    for ($i = 0, $length = count($files); $i < $length; $i++) {
        if (is_dir($path . $files[$i])) {
            unset($files[$i]);
        }
    }
    return $files;
}