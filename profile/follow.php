<?php
require_once ('libs/init.php');
require_once ('libs/@user/user.php');
require_once ('libs/@user/follow.php');

$fd = get_val('fd') ?? '';

if ($fd != '' && getUserInfo() && !follows(getUserInfo_prop('id'), $fd)) {
    follow(getUserInfo_prop('id'), $fd);
    redirect('./?q=' . $fd);
}else {
    _404_();
}