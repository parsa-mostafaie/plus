<?php require_once '../libs/@security/security.php';

header('Access-Control-Allow-Origin: localhost');

echo redirect_secure(get_val('url'), back_addr: get_val('back'), gen_only: true);