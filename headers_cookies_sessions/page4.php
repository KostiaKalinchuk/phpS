<?php

session_start();
require_once __DIR__ . '/background_color.php';
require_once __DIR__ . '/savepage.php';
require_once __DIR__ . '/menu.php';
?>
    <h4>Список сторінок відвіданих сторінок:</h4>
<?php
require_once __DIR__ . '/visited.php';