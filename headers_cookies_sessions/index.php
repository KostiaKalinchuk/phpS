<?php

session_start();
require_once __DIR__ . '/background_color.php';
require_once __DIR__ . '/menu.php';
require_once __DIR__ . '/savepage.php';
?>

    <form method="post">
        <label>Виберіть колір: </label><select size="1" name="color">
            <?php foreach ($arr_color as $v) {
                if ($color == $v) {
                    echo "<option selected>$v</option>";
                } else {
                    echo "<option>$v</option>";
                }
            } ?>
        </select>
        <input type="submit">
    </form>


    <form method="GET">
        <input type="text" name="username">
        <input type="submit">
    </form>

<?php
if (!empty($_REQUEST['username'])) {
    $_SESSION['username'] = $_REQUEST['username'];
}
?>



