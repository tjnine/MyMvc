<?php 
namespace App\Controllers;

use App\Models\AboutModel;

class AboutController
{
    private $model;

    public function __construct(AboutModel $model)
    {
        $this->model = $model;
    }

    public function clicked()
    {
        return $this->model->string = "updated data.";
    }
}

?>