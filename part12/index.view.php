<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php foreach ($tasks as $task): ?>
            <span><?= $task->description; ?></span><br>
        <?php endforeach; ?>
    </body>
</html>
