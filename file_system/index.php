<?php

error_reporting(E_ALL);

require_once __DIR__ . '/files.php';

?>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="upload">
        <input type="submit" value="Upload">
    </form>

<?php
foreach (getFilesImg($imgDir) as $file) {
    echo '<img src="' . $imgDir . $file . '" width="200px" height="200px" />';
}
foreach (getFilesDoc($docDir) as $file) {
    echo "<br>";
    echo $file;
}
?>