<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form action="8.php" method="post">
        <div class="form-group">
            <label for="user">Name:</label>
            <input type="text" name="user" class="form-control" id="user" placeholder="user" required>
        </div>
        <div class="form-group">
            <label for="comment">Comment:</label>
            <input type="text" name="comment" class="form-control" id="comment" placeholder="comment" required>
        </div>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </form>
    <div align="center"><?=$form_was_send ? 'yes' : 'no';  ?></div>
<?php if (file_exists('comments.txt')): ?>
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>№</td>
            <td>Name:</td>
            <td>Comment:</td>
        </tr>
        </thead>
        <?php for ($i=0;$i<count($comments);$i++):?>
            <tbody>
            <tr>
                <td width="5%"><?=$i+1?></td>
                <td><?=$comments[$i]['user']   ?></td>
                <td><?=$comments[$i]['comment']   ?></td>
            </tr>
            </tbody>
        <?php endfor; ?>
    </table>
<?php endif; ?>
</div>
</body>
</html>