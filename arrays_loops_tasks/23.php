<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = isset($_POST['number']) ? $_POST['number'] : false;
    if (is_numeric($number)) {
        $digits = str_split($number);
        $sum = array_sum($digits);
        $result = "<p>Сума чисел {$number} дорівнює {$sum}</p>";
    } else {
        $result = "<p>Невірне введення</p>";
    }

}
?>
<?= isset($result) ? $result : '' ?>
<form action="" method="post">
    <p>
        <label for="number">Введіть число</label><br>
        <input type="text" name="number" id="number">
    </p>
    <p>
        <button>Порахувати</button>
    </p>
</form>