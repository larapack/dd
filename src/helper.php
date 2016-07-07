<?php

if (!function_exists('dd')) {
    function dd()
    {
        array_map('var_dump', func_get_args());

        die();
    }
}
