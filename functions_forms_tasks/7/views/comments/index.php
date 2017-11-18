<?php

$comments = [];

$dir = __DIR__ . '/../../data';
foreach (scandir($dir) as $file) {
    if (in_array($file, ['.', '..', '.gitignore'])) {
        continue;
    }

    $content = file_get_contents("{$dir}/{$file}");
    $row = json_decode($content, true);
    $row['file'] = $file;
    $comments[] = $row;
}

$currentComment = [];
$saveAttr = '';
if (array_key_exists('file', $_GET)) {
    $currentContent = file_get_contents("{$dir}/{$_GET['file']}");
    $currentComment = json_decode($currentContent, true);
    $saveAttr = "?file={$_GET['file']}";
}

?>
<div class="col-lg-12">
    <h3>Гостьова книга</h3><hr></div>
<?php foreach ($comments as $comment) : ?>


    <div class="row">
        <div class="col-lg-12">
            <p><b>Ім'я:</b> <?= $comment['name'] ?></p>
            <p><b>Коментарій:</b><br> <?= nl2br($comment['comment']) ?></p>
            <a href="/functions_forms_tasks/7?file=<?= $comment['file'] ?>" class="btn btn-xs btn-info">Редагувати</a>
            <a href="/functions_forms_tasks/7/delete.php?file=<?= $comment['file'] ?>" class="btn btn-xs btn-primary">Видалити</a>
        </div>
    </div>
    <hr>

<?php endforeach; ?>

        <form method="post" action="/functions_forms_tasks/7/save.php<?= $saveAttr ?>">
            <div class="form-group">
                <label>Ім'я</label>
                <input
                    type="text"
                    name="username"
                    value="<?= ($currentComment ? $currentComment['name'] : null) ?>"
                    class="form-control">
            </div>
            <div class="form-group">
                <label>Ваш коментарій</label>
                <textarea name="comment" class="form-control"><?= ($currentComment ? $currentComment['comment'] : null) ?></textarea>
            </div>

            <input type="submit" value="Додати" class="btn btn-success">
            <a href="/functions_forms_tasks/7" class="btn btn-danger">Відмінити</a>
        </form>
    </div>
</div>


