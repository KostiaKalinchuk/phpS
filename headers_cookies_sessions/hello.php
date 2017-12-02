<?php
session_start();

require_once __DIR__ . '/background_color.php';
require_once __DIR__ . '/menu.php';
require_once __DIR__ . '/savepage.php';

if (!empty($_SESSION['username'])) {
    echo "Привіт" . " " . $_SESSION['username'] . "!";
}
?>

