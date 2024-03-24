<?php
require_once 'libs/init.php';
require_once 'libs/@form/processors/@processor.php';
require_once 'libs/@user/auth.php';

$uname = get_val('uname');
$pword = get_val('pword');

$uname = trim($uname);

$_inps_arr = [$uname, $pword];

$_COND = !array_any($_inps_arr, fn($val) => strlen($val) == 0);

$_SUBMITED = setted('login');

// PROCESSOR
$__PROCESS__CALLBACK__ = function () {
    global $uname, $pword;
    if (!loginWith($uname, $pword)) {
        throw new Exception('Login Failed!');
    } else {
        redirect('/');
    }
};

$__PROCESS__SUCCESS__ = function () {
    redirect('/');
};

$__PROCESS__FAILED__ = $__DEFAULT__PROCESS_FAILED;
