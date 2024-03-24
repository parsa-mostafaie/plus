<?php
// NOTE THAT's ALWAYS PUBLIC
session_start();

function get_session($name)
{
    return $_SESSION[$name] ?? '';
}