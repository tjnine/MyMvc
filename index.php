<?php 
require_once __DIR__ . '/vendor/autoload.php';

$m = new App\Models\AboutModel;
$c = new App\Controllers\AboutController($m);
echo $c->clicked();
$v = new App\Views\AboutView($c,$m);
echo $v->output();
?>