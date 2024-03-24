<?php
require_once 'auth.php';
require_once 'follow.php';
require_once 'libs/init.php';

//NOTE THIS FILE REQUIRES:
// A users TABLE WITH id

//NOTE THIS PART IS PUBLIC ONLY WHEN: users TABLE HAS id and admin
function growUpUser($id)
{
  return update_q('users', 'id=?', 'admin = 1', [$id]);
}

function shrinkDownUser($id)
{
  return update_q('users', 'id=?', 'admin = 0', [$id]);
}
//ENDPART

//NOTE THIS PART IS PUBLIC
function validateUserName($userName)
{
  if (preg_match('/^[A-Za-z][0-9A-Za-z_-]{2,24}$/', $userName)) {
    return true;
  }
  return false;
}
//ENDPART

//NOTE THIS PART IS CUSTOMIZED
function set_prof_image($tid, $name)
{
  $file = uploadFile_secure($name, prefix: 'user_profile_');
  return update_users(condition: "id='$tid'", set: "profile = ?", params: [$file]);
}

function get_prof_fname($tid)
{
  return get_users(cols: 'profile', condition: "id = '$tid'")->fetchColumn();
}

function get_prof_url($tid)
{
  return urlOfUpload(get_prof_fname($tid));
}

function rem_prof_img($tid)
{
  unlinkUpload(get_prof_fname($tid));
  return update_users(condition: "id = ?", set: "profile = ''", params: [$tid]);
}

function get_prof_img($uname, $cattrs = '')
{
  $purl =
    get_prof_url(get_users(cols: 'id', condition: "username = '$uname'")->fetchColumn());
  return '<img src="' . $purl . '" class="avatar-xxl
              rounded-circle" onerror="this.onerror=null;this.src=\'/photos/unknown.png\'" alt="Image" ' . $cattrs . '>
';
}
//ENDPART

//NOTE THIS PART IS CUSTOMIZED
function add_user($fname, $lname, $uname, $pword)
{
  $date = date('Y-m-d H:i:s');
  $hashed = hash_pass($pword);
  $insert = insert_q('users', 'firstname, lastname, date, username, password', '?, ?, ?, ?, ?', [$fname, $lname, $date, $uname, $hashed]);
  return $insert;
}
//ENDPART

// THIS PART IS PUBLIC
function get_users(...$params)
{
  return select_q("users", ...$params);
}

function update_users(...$args)
{
  return update_q("users", ...$args);
}

function delete_users($id)
{
  $id = intval($id);
  if ($id) {
    return delete_q("users", "id = ?", [$id]);
  }
  return false;
}
// ENDPART