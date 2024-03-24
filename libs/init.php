<?php
include_once 'libs/array.php';
include_once 'libs/@user/user.php';
include_once 'libs/@form/get_post.php';

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