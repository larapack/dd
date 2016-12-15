<?php

if (!function_exists('dd')) {
    function dd()
    {
        array_map('var_dump', func_get_args());

        die();
    }
}

if (!function_exists('d')) {
    function d()
    {
        $args = func_get_args();
        call_user_func_array('dump', $args);
    }
}
