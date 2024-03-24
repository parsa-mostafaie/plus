<?php
require_once ('libs/init.php');
require_once ("libs/@user/user.php");
require_once ('lib.php');

//? only admins can see /admin
authAdmin();

if (setted('uid')) {
    $uid = get_val('uid');
    if (growUpUser($uid)) {
        echo '<div class="btn btn-success">Success! (USER Admined!)</div>';
        redirect('users.php');
    } else {
        echo '<div class="btn btn-danger">Failed! (USER DOES NOT Admined!)</div>';
    }
}
