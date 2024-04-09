<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/init.php';

if (!getCurrentUserInfo())
    _404_();
else {
    signout();
    redirect('/index.php');
}