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

define('DB_HOST', 'localhost');

/**
 * The database name
 */
define('DB_NAME', 'fukyeah');

/**
 * The user in your database
 */
define('DB_USER', 'root');

/**
 * The user's password in your database
 */
define('DB_PASS', 'root');

/**
 * Dont need - using psr4 composer autoloading
 */
// spl_autoload_register(function($class) {
//     require_once '../classes/' . $class . '.php';
// });



