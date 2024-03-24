<?php 
//NOTE: THIS IS ALWAYS PUBLIC
function array_any(array $array, callable $fn)
{
  foreach ($array as $value) {
    if ($fn($value)) {
      return true;
    }
  }
  return false;
}

function array_every(array $array, callable $fn)
{
  foreach ($array as $value) {
    if (!$fn($value)) {
      return false;
    }
  }
  return true;
}
