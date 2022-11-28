<?php

function t($text)
{
    static $lang;
    if ($lang == null) $lang = '?lang=fr';
    if (!$lang) {
        $lang = parse_ini_file($_GET['lang'] . '.ini');
    }
    return (isset($lang[$text])) ? $lang[$text] : $text;
}