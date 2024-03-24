<?php
//? libs:init.php v0.5.1
//! Publics
include_once 'array.php';
include_once '@form/processors/@processor.php';
include_once '@form/get_post.php';
include_once '@security/upload.php';
include_once 'session.php';
include_once 'sql.php';
include_once '@user/auth.php';

//! For This Project
include_once '@user/user.php';
include_once 'jdf/jdf.php';
include_once '@user/follow.php';

//! ADMIN
include_once __DIR__ . "/../admin/lib.php";

function redirect($url)
{
    header('Location: ' . $url);
    die();
}
function hash_pass(string $str)
{
    return hash('sha256', $str);
}

function _404_()
{
    header('HTTP/1.1 404 Not Found', true, 404);
    die();
}