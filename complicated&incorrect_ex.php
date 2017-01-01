<?php 
require_once __DIR__ . '/vendor/autoload.php';

$page = $_GET['page'];
$model = $_GET['model'];
$view = $_GET['view'];
$controller = $_GET['controller'];
$action = $_GET['action'];

if(!empty($page)) {
    $routes = [
        'about' => [
            'model'         => 'AboutModel',
            'view'    => 'AboutView',
            'controller'    => 'AboutController',
            ],
        'contact' => [
            'model'         => 'ContactModel',
            'view'    => 'ContactView',
            'controller'    => 'ContactController',
            ]
    ];

    foreach($routes as $key => $value) {
        if($page == $key) {
            $model = $value['model'];//ex. AboutModel
            $view = $value['view'];//ex. AboutView
            $controller = $value['controller'];//ex. AboutController
            break;
        }
    }

    if(!(empty($model) || empty($view) || empty($controller) || empty($action))) { 
    $mm = 'App\Models\?';
    $mmm= str_replace('?', "", $mm) . $model;
    $m = new $mmm();
       
    $vv = 'App\Views\?';
    $vvv = str_replace('?', "", $vv) . $view;
    $v = new $vvv($m);

    $cc = 'App\Controllers\?';
    $ccc = str_replace("?", "", $cc) . $controller;
    $c = new $ccc($m, $action);

     echo $v->output();
    }
}

?>