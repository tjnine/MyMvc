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

    public function header()
    {
      return $string = "{$this->model->string}";

    }
}
?>