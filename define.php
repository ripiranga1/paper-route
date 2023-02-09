<?php

# Arquivo de definição do sistema

// Verifica se está no servidor local ou online
if ($_SERVER['HTTPS']) {
    $url = "https://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

    /* DB Server */
    define('DB',       '');
    define('USER',     '');
    define('PASSWORD', '');
    define('HOST',     '');
    
} else {
    $url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    
    /* DB Local */
    define('DB',       '');
    define('USER',     'root');
    define('PASSWORD', '');
    define('HOST',     'localhost');
}


//
define ("APP", "Paper Route");
define ("APP_PATH", $url);