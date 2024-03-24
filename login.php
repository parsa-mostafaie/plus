<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/init.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/@form/processors/login-form.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/style.css">

    <script src="resubmit.js"></script>
</head>

<body class="bg-dark" style='font-size:1rem'>
    <form class="mx-auto w-75 bg-light bordrer border-black rounded p-3 my-3 p-md-5" action="" method="post">
        <?php
        process_form();
        ?>
        <h1>
            Login
        </h1>
        <div class="mb-3">
            <label for="username" class="form-label">Username / Email</label>
            <input type="username" class="form-control" id="username" value="<?= $uname ?? '' ?>" name='uname'>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password *</label>
            <input type="password" class="form-control" id="password" value="<?= $pword ?? '' ?>" name='pword'>
        </div>
        <button type="submit" class='btn btn-success' name='login'>Login</button>
        <br>
        <br>
        New User? <a href='signup.php'>Signup</a>
    </form>
</body>

</html>