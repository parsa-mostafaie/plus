<?php
require_once "libs/sql.php";
require_once "libs/session.php";
require_once "user.php";
require_once "libs/init.php";

//? return: login successed?
function loginWith($username, $pass)
{
  $id = (get_users(cols: 'id', condition: 'username = ? OR mail = ?', p: [$username, $username]));
  if ($id) {
    $id = $id->fetchColumn();
    if (canLoginWith($id, $pass)) {
      $_SESSION['uid'] = $id;
      $_SESSION['pass'] = $pass;
      return true;
    }
  }
  return false;
}

function canlogin()
{
  $id = get_session('uid');
  $pass = get_session('pass');

  return canLoginWith($id, $pass);
}

function canLoginWith($id, $pass)
{
  $user = get_users(cols: 'password', condition: 'id = ?', p: [$id]);

  if ($user) {
    $user_pass = $user->fetchColumn();

    if (hash_pass($pass) == $user_pass) {
      return true;
    }
  }

  return false;
}

function getUserInfo()
{
  if (canLogin()) {
    $id = get_session('uid');

    $user = get_users(cols: '*', condition: 'id = ?', p: [$id])->fetchAll(PDO::FETCH_ASSOC)[0];

    return $user;
  }
  return null;
}

function getUserInfo_prop($name)
{
  return getUserInfo()[$name] ?? null;
}

function signout()
{
  unset($_SESSION['uid'], $_SESSION['pass']);
}