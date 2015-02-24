<?php

if (!function_exists('dd'))
{
  function dd()
  {
    $args = func_get_args();
    call_user_func_array('dump', $args);
    die();
  }
}
