<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/init.php';

$uname = get_val('uname');
$pword = get_val('pword');

$uname = trim($uname);

$_inps_arr = [$uname, $pword];

[$inputs, $errors] = filter(['username' => $uname, 'password' => $pword], ['username' => 'string | required', 'password' => 'string | required']);

$_SUBMITED = setted('login');

$errors = $_SUBMITED ? $errors : [];
$_COND = count($errors) == 0;
// PROCESSOR
$__PROCESS__CALLBACK__ = function () {
    global $uname, $pword;
    if (!loginWith($uname, $pword)) {
        throw new Exception('Login Failed! Username or password is incorrect!');
    } else {
        redirect('/');
    }
};

$__PROCESS__SUCCESS__ = function () {
    redirect('/');
};

$__PROCESS__FAILED__ = $__DEFAULT__PROCESS_FAILED;

function errors($field)
{
    global $errors;
    return isset($errors[$field]) ? $errors[$field] : '';
}