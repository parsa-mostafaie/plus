<?php
require_once __DIR__ . '/../init.php';

//NOTE THIS PART IS CUSTOMIZED
function set_pbg_image($tid, $name)
{
  $file = uploadFile_secure($name, prefix: 'user_pbg_');
  if ($file) {
    rem_pbg_img($tid);
    return update_users(condition: "id='$tid'", set: "pbg = ?", params: [$file]);
  }
}

function get_pbg_url($tid)
{
  return urlOfUpload(get_users(cols: 'pbg', condition: "id = '$tid'")->fetchColumn());
}

function rem_pbg_img($tid)
{
  unlinkUpload(get_pbg_url($tid));
  return update_users(condition: "id = ?", set: "pbg = NULL", params: [$tid]);
}

function get_pbg_img($uname, $cattrs = '')
{
  $purl =
    get_pbg_url(get_users(cols: 'id', condition: "username = '$uname'")->fetchColumn());
  return divImage($purl, 'class="pt-20 rounded-top" ' . $cattrs);
}

function has_pbg_img($tid)
{
  $_purl = get_pbg_url($tid);
  $purl = $_SERVER['DOCUMENT_ROOT'] . regular_url($_purl);
  return file_exists($purl) && get_pbg_url($tid);
}
//ENDPART