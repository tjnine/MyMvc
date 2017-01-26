<?php 
namespace App\Models;

use App\Models\Database;

class Model {

    function __construct() {
        $this->db = new Database();
    }

}
?>