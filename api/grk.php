<?php require_once '../libs/@security/security.php';

API_header();

echo redirect_secure(get_val('url'), back_addr: get_val('back'), gen_only: true);