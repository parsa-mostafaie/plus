<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/init.php';

if (!function_exists('canlogin')) {
    echo '<b>Internal ERROR: canLogin does not exists</b>';
} else if (canlogin()) {
    ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Feed</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        </head>

        <body>
            Hello
            <a href='/profile/?user=<?= getUserInfo()["username"] ?>'>@
            <?= getUserInfo()['username'] ?>
            </a>
        </body>

        </html>
    <?php
} else {
    echo ' <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<a href="/signup.php" class="btn btn-warning">Register</a> To Continue';
}
?>