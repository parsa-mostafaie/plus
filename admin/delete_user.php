<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/init.php';

//? only admins can delete users
authAdmin();

if (setted('uid')) {
    $uid = get_val('uid');
    if (delete_users($uid)) {
        echo '<div class="btn btn-success">Success! (USER DELETED!)</div>';
        redirect('users.php');
    } else {
        echo '<div class="btn btn-danger">Failed! (USER DOES NOT DELETED!)</div>';
    }
}
