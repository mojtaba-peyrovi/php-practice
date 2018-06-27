<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Document</title>
        <style media="screen">
            header{
                background-color: #e3e3e3;
                padding: 2em;
                text-align: center;
            }
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    </head>
    <body>
        <ul>
            <?php foreach ($person as $feature): ?>
                <li><?= $feature; ?></li>

            <?php endforeach; ?>

        </ul>
    </body>
</html>
