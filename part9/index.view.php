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

        <div class="container">
            <div class="card my-4">
                <div class="card-header bg-warning">
                    My Tasks Today
                </div>
                <div class="card-bodyb bg-light">
                    <ul class="list-unstyled ml-3 mt-3">
                        <?php foreach ($task as $feature => $value): ?>
                            <li>
                                <strong><?= ucwords($feature) ?> :</strong>
                                <?= $value ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <strong>status: </strong>

                    <span>
                        <?php
                        if ($task['completed']) {
                            echo "&#9989;";
                        }else {
                            echo "&#10060;";
                        }
                        ?>
                    </span>

                </div>
            </div>
        </div>









    </body>
</html>
