<?php 
namespace App\Models;


class Database extends \PDO
{
    const DB_HOST = "localhost",
          DB_NAME = "fukyeah",
          DB_USER = "root",
          DB_PASS = "root";

    public function __construct()
    {
        parent::__construct('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER,DB_PASS);
        
    }
}

 ?>