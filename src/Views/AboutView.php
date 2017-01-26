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
        echo "Awesome-PHP.net";
    }

    public function content()
    {
      return $this->model->run();

    }
}
?>