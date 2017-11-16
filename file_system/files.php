<?php

$tmpName = $_FILES['upload']['tmp_name'];
$storageImg = 'storage/doc/' . time() . basename($_FILES['upload']['name']);
$storageDoc = 'storage/img/' . time() . basename($_FILES['upload']['name']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_FILES['upload']['error'] == 0) {

        if ($_FILES['upload']['size'] <= 0 || $_FILES['upload']['size'] >= 2000000) {
            echo 'Exceeded maximum file size';
            return false;
        }
        if ($_FILES['upload']['type'] == 'text/plain') {

            move_uploaded_file($tmpName, $storageImg);
        } else {
            move_uploaded_file($tmpName, $storageDoc);
        }
    }
}


//Gallery
$imgDir = 'storage/img/';
$docDir = 'storage/doc/';

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

function getFilesDoc($path)
{
    $files = scandir($path);
    for ($i = 0, $length = count($files); $i < $length; $i++) {
        if (is_dir($path . $files[$i])) {
            unset($files[$i]);
        }
    }
    return $files;
}