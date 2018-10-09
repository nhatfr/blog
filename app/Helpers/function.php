<?php
// write helper functions

if (!function_exists('convert_text_to_friendly_url')) {
    function convert_text_to_friendly_url($text)
    {
        return preg_replace('/\W+/', '-', trim(strtolower($text)));
    }
}
