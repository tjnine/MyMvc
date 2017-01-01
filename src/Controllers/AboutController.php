<?php 
namespace App\Controllers;

class AboutController
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function clicked()
    {
        return $this->model->string = "updated data.";
    }
}

?>