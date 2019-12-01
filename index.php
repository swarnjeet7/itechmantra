<?php

    $whitelist = array('127.0.0.1','::1');

    if(!defined('SITE_URL')) {
        define('SITE_URL', 'http://itechmantra.com');

        if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
            define('SITE_URL', 'http://mantra.itech');
        }
    }

    if(!defined('SITE_PATH')) {
        define('SITE_PATH', 'C:\wamp64\www\itechmantra');

        if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
            define('SITE_PATH', 'C:\wamp64\www\itechmantra');
        }
    }

    if(!defined('APP')) {
        define('APP', SITE_PATH.'/app');
    }
    if(!defined('CSS')) {
        define('CSS', '/app/assets/css');
    }
    if(!defined('JS')) {
        define('JS', '/app/assets/js');
    }
    if(!defined('IMG')) {
        define('IMG', '/app/assets/img');
    }


    require_once 'app/index.php';



?>
