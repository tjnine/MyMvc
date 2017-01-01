<?php 
namespace App\Views;

class View
{

    private $model,
            $controller;

    public function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output()
    {
        return "<p><a href='?action=clicked'>{$this->model->string}</a></p>";
    }

}
?>