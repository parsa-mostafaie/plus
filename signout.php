<?php
require_once ('libs/init.php');
require_once ('libs/@user/auth.php');

if (!getUserInfo())
    _404_();
else {
    signout();
    redirect('/index.php');
}