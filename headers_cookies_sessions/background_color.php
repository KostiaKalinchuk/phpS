<?php

$arr_color = array('white', 'red', 'green', 'blue', 'yellow', 'orange');
if (isset($_POST['color'])) {
    setcookie('color', $_POST['color'], time() + 300);
    $color = $_POST['color'];
} else if (isset($_COOKIE['color'])) {
    $color = $_COOKIE['color'];
} else {
    $color = $arr_color[0];
}
echo "<style>body{background:$color;}</style>";
