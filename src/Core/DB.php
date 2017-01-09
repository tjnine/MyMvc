<?php

class DB
{


    private $host   = DB_HOST;
    private $user   = DB_USER;
    private $pass   = DB_PASS;
    private $dbname = DB_NAME;

    private $stmt;
    private $dbh;
    private $error;

    private $dsn;
    private $driver_options;

    public function __construct(){
        /**
         * Set DSN
         */
        $this->dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;

        /**
         * Set options
         */
        $this->driver_options = array(
            PDO::ATTR_EMULATE_PREPARES  => false,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_OBJ,
            PDO::ATTR_PERSISTENT        => true,
            PDO::MYSQL_ATTR_INIT_COMMAND    => 'SET NAMES utf8'
        );

        try {
            /**
             * Create a new PDO instanace
             * @param string $dns
             * @param string $user
             * @param string $pass
             * @param array $driver_options
             */
            $this->dbh = new PDO($this->dsn, $this->user, $this->pass, $this->driver_options);
        } catch (PDOException $ex) {
            /**
             * Catch any errors
             */
            $this->error = $ex->getMessage();
        }
    }

    
}
?>