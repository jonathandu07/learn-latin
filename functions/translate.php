<?php

function t($text)
{  
    static $lang;
    $path = 'fr';
    if (isset($_GET['lang'])) {
        $path = $_GET['lang'];
        $lang = parse_ini_file($path. '.ini');
    }
    elseif((isset($_SESSION['lang']))){
        $path = $_SESSION['lang'];
    }
    $_SESSION['lang'] = $lang;

    return (isset($lang[$text])) ? $lang[$text] : $text;
}

function l()
{
    $langue = $_SESSION[$_GET['lang']] = '?lang='.$_GET['lang'];

    return $langue;
}