<?php

require_once __DIR__ . '/6_2.php';

?>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="upload">
        <input type="submit" value="Завантажити">
    </form>

<?php
foreach (getFilesImg($imgDir) as $file) {
    echo '<img src="' . $imgDir . $file . '" width="250px" height="250px" />';
}
?>