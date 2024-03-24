<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/init.php';

if (!getUserInfo())
    _404_();
else {
    signout();
    redirect('/index.php');
}