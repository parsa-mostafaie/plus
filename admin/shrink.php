<?php
require_once ('libs/init.php');
require_once ("libs/@user/user.php");
require_once ('lib.php');

//? only admins can see /admin
authAdmin();

if (setted('uid')) {
    $uid = get_val('uid');
    if (shrinkDownUser($uid)) {
        echo '<div class="btn btn-success">Success! (USER IS NOT A ADMIN!)</div>';
        redirect('users.php');
    } else {
        echo '<div class="btn btn-danger">Failed!</div>';
    }
}