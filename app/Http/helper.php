<?php

use Illuminate\Support\Facades\Request;

if (!function_exists('active_menu')) {
    function active_menu($link)
    {
        if (preg_match('/' . $link . '/i', Request::segment(1))) {
            return 'active';
        } else {
            return '';
        }
    }
}
