<?php

$fileName = __DIR__ . '/data/' . $_GET['file'];
function delete ($fileName){
    if(file_exists($fileName)) {
        unlink($fileName);
    }
}
delete($fileName);
header("Location: /functions_forms_tasks/7", true, 301);