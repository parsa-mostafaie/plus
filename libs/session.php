<?php
session_start();

function get_session($name)
{
    return $_SESSION[$name] ?? '';
}