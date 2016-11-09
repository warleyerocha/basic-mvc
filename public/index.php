<?php
include_once '../vendor/autoload.php';

spl_autoload_register(function ($class){
	$root = dirname(__DIR__);
	$file = $root . '/' . str_replace('\\', '/', $class) . '.php';
	if (is_readable($file)) {
		require $root . '/' . str_replace('\\', '/', $class) . '.php';
	}
});


// New cooment to test git
$root = test;
$router = new Core\Router();

// Add the routes
$router->add('',['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}',['action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/', ['controller' => 'Users', 'action' => 'index', 'namespace' => 'Admin']);
$router->add('admin/{controller}/', ['action' => 'index', 'namespace' => 'Admin']);
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);

$router->dispatch($_SERVER['QUERY_STRING']);
