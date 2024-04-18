<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/init.php';

//? only admins can see /admin
authAdmin();

if (validate_redirect()) {
  if (setted('uid')) {
    $uid = get_val('uid');
    if (growUpUser($uid)) {
      echo '<div class="btn btn-success">Success! (USER Admined!)</div>';
    } else {
      echo '<div class="btn btn-danger">Failed! (USER DOES NOT Admined!)</div>';
    }
  }
}

redirectBack();