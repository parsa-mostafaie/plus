<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/libs/init.php';

$__unsafe__hash__pass__disable = true;

if (!defined('shop')) {
    define('shop', true);
    HOME_URL('/shop');
    db('plus_shop');
}
