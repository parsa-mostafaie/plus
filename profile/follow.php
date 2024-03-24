<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/init.php';

$fd = get_val('fd') ?? '';

if ($fd != '' && getUserInfo() && !follows(getUserInfo_prop('id'), $fd)) {
    follow(getUserInfo_prop('id'), $fd);
    redirect('./?q=' . $fd);
} else {
    _404_();
}