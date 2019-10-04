<?php

@require __DIR__ . '/../App/autoload.php';

$controller = $_GET['ctrl'] ?? 'Index';
//var_dump($ctrl);

$class = '\App\Controllers\\' . $controller;

$controller = new $class;

$controller();
