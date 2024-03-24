<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/init.php';

if (getUserInfo()) {
    rem_prof_img(getUserInfo_prop('id'));
    redirect('./');
} else {
    _404_();
}