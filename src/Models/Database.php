<?php 

class DataBase {

    private $host   = "localhost";
    private $user   = "root";
    private $pass   = "root";
    private $dbname = "fukyeah";

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

    /**
     * Make a query
     * @param string $query
     * @return PDOStatement|PDOException
     */
    public function query($query) {
        $this->stmt = $this->dbh->prepare($query);
    }

    /**
     * Bind the data
     * @param string $param
     * @param string $value
     * @param int|bool|null|string $type
     * @return bool
     */
    public function bind($param, $value, $type = null){
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }
    
    /**
     * Bind the data from an array
     * @param array $param_array
     * @return bool
     * @see DataBase::bind()
     */
    public function bindArray($param_array) {
        array_map(array($this, 'bind'), array_keys($param_array), array_values($param_array));
    }

    /**
     * Executhe the query
     * @return bool
     */
    public function execute(){
        return $this->stmt->execute();
    }

    /**
     * Get multiple records
     * @return object
     * @see DataBase::$driver_options
     */
    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll();
    }

    /**
     * Get single record
     * @return object
     * @see DataBase::$driver_options
     */
    public function single(){
        $this->execute();
        return $this->stmt->fetch();
    }

    /**
     * Get number of affected rows
     * @return int
     */
    public function rowCount(){
        return $this->stmt->rowCount();
    }

    /**
     * Get last inserted id
     * @return int
     */
    public function lastInsertId(){
        return $this->dbh->lastInsertId();
    }

    /**
     * Run batch queries
     * @return bool
     */
    public function beginTransaction(){
        return $this->dbh->beginTransaction();
    }

    /**
     * Stop batch queries
     * @return bool
     */
    public function endTransaction(){
        return $this->dbh->commit();
    }

    /**
     * Cancel batch queries
     * @return bool
     */
    public function cancelTransaction(){
        return $this->dbh->rollBack();
    }

    /**
     * Dumps info contained in prepared statement
     * @return void
     */
    public function debugDumpParams(){
        return $this->stmt->debugDumpParams();
    }
}
?>
