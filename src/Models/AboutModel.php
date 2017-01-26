<?php 
namespace App\Models;

use App\Models\Model;

class AboutModel extends Model
{
    protected $db;
    public $string;

    public function __construct()
    {
        parent::__construct();
         // return $this->string = "PDO/MongoDB/JS";    
    }

    public function run()
    {
        /**
         * Get the data
         */
        $sth = $this->db->prepare("SELECT * FROM dude");
        $sth->execute();
        $results = $sth->fetch();

        /**
         * Now Lets Loop
         */
        foreach ($sth as $row)
        {
            echo $row['fname'] . $row['email'] . "\n";
        }

        // if ($sth->rowCount() > 0){
        //     // elegant - all
        //     for ($i = 0; $i < count($results); ++$i) {
        //         foreach($results as $row) {
        //             echo $row;
        //         }
        //     }
        // }

        // succint - basic
        // foreach ($sth->fetch() as $row) {
        //     print $row;
        // }

        // basic
        // foreach($results as $row) {
        //   echo $row['name'];
        // }

        // elegant - basic
        // while (list($var, $val) = each($results)) {
        // print "{$var} is {$val}\n";
        // }

        // elegant - all
        // for ($i = 0; $i < count($results); ++$i) {
        //     foreach($results as $val) {
        //     print $val;
        //     }
        // }

        /**
         * Looping objects
         */
        // foreach ($results as $obj) {
        // echo $obj->email;
        // }
        #for a inner object this would work:

        // foreach ($objects as $obj){
        // echo $obj->user->description;
        // }
    }
}

?>