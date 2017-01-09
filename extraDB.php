<?php

class DB
{
    /**
     *  $_db holds the DB instance
     */
    private static $__db = null;

/**
 *  $_pdo returns pdo object
 */
    private $_pdo,
                $_error,
                $_results,
                $_count = 0;

                public function __construct()
                {
                    try {
$db = parse_ini_file("settings.ini");
$pdo = new PDO(
    sprintf(
        'mysql:host=%s;dbname=%s;port=%s;charset=%s',
        $host = $db['host'],
        $database = $db['database'],
        $port = $db['port'],
)); 
            } catch(Exception $e) {
                die($e->getMessage());
            } //end try catch
        } //end __construct

        public function conn()
        {
            if( self::$__db === null){
                self::$__db = new DB;
            }
            return self::$__db;
        }

}