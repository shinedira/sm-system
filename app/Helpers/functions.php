<?php

if (! function_exists('is_nav_active')) {
    function is_nav_active($nav, $isFull = true) {
        return request()->is("*{$nav}*") ? 
                ($isFull ? "class=active" : 'active') : 
                '';
    }
}