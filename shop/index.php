<?php require_once './includes/c-init.php';

echo 'Main page <br>';
if (!canlogin()) {
    echo '<a href="login.php">Login</a> ';
} else {
    echo 'your are login' . get_session('user_id');
}
