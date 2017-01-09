<?php
ob_start();
session_start();

$GLOBALS['config'] = [
    'mysql' => [
        'host' => 'localhost',
        'username' => 'root',
        'password' => 'root',
        'database' => 'octane'
    ],
    'remember' => [
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800
    ],
    'session' => [
        'session_name'  =>  'user',
        'token_name'    =>  'token' 
    ]
];

/**
 * Dont need - using psr4 composer autoloading
 */
// spl_autoload_register(function($class) {
//     require_once '../classes/' . $class . '.php';
// });



