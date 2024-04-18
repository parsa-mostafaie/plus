<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/init.php';

//? only admins can see /admin
authAdmin();

if (validate_redirect()) {
  if (setted('uid')) {
    $uid = get_val('uid');
    if (shrinkDownUser($uid)) {
      echo '<div class="btn btn-success">Success! (USER IS NOT A ADMIN!)</div>';
      redirect('users.php');
    } else {
      echo '<div class="btn btn-danger">Failed!</div>';
    }
  }
}

redirectBack();