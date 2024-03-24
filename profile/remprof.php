<?php
require_once ('libs/@user/user.php');
require_once ('libs/init.php');

if (getUserInfo()) {
    rem_prof_img(getUserInfo_prop('id'));
    redirect('./');
} else {
    _404_();
}