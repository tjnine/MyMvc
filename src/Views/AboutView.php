<?php 
namespace App\Views;


class AboutView
{
    public $controller,
                $model;

    public function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function output()
    {
      return $string = "<p><a href='?action=clicked'>{$this->model->string}</a></p>";

    }
}
?>