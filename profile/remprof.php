<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/init.php';

if (getCurrentUserInfo()) {
    rem_prof_img(getCurrentUserInfo_prop('id'));
    redirect('./');
} else {
    _404_();
}