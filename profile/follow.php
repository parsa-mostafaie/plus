<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/init.php';

$fd = get_val('fd') ?? '';

if ($fd != '' && getCurrentUserInfo() && !follows(getCurrentUserInfo_prop('id'), $fd)) {
    follow(getCurrentUserInfo_prop('id'), $fd);
    redirect('./?q=' . $fd);
} else {
    _404_();
}