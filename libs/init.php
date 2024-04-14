<?php
if (!isset($HOME_URL)) {
  $HOME_URL = '';
}
//? libs:init.php v0.5.1
//! Publics
include_once 'array.php';
include_once '@form/processors/@processor.php';
include_once '@form/get_post.php';
include_once '@security/upload.php';
include_once 'session.php';
include_once 'sql.php';
include_once '@user/auth.php';
include_once "info.php";

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
  global $__unsafe__hash__pass__disable;
  if ($__unsafe__hash__pass__disable)
    return $str;
  return hash('sha256', $str);
}
function c_url($url)
{
  global $HOME_URL;
  return regular_url($HOME_URL . $url);
}
function _404_()
{
  header('HTTP/1.1 404 Not Found', true, 404);
  die();
}
function number_format_short($n, $precision = 1)
{
  if ($n < 900) {
    // 0 - 900
    $n_format = number_format($n, $precision);
    $suffix = '';
  } else if ($n < 900000) {
    // 0.9k-850k
    $n_format = number_format($n / 1000, $precision);
    $suffix = 'K';
  } else if ($n < 900000000) {
    // 0.9m-850m
    $n_format = number_format($n / 1000000, $precision);
    $suffix = 'M';
  } else if ($n < 900000000000) {
    // 0.9b-850b
    $n_format = number_format($n / 1000000000, $precision);
    $suffix = 'B';
  } else {
    // 0.9t+
    $n_format = number_format($n / 1000000000000, $precision);
    $suffix = 'T';
  }

  // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
  // Intentionally does not affect partials, eg "1.50" -> "1.50"
  if ($precision > 0) {
    $dotzero = '.' . str_repeat('0', $precision);
    $n_format = str_replace($dotzero, '', $n_format);
  }

  return $n_format . $suffix;
}


function regular_url($_purl)
{
  return str_replace('/', DIRECTORY_SEPARATOR, $_purl);
}