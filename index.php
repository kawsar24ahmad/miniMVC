<?php

define('APP_ROOT', __DIR__);

// echo APP_ROOT;
// echo DIRECTORY_SEPARATOR;
require APP_ROOT .'/vendor/autoload.php';
// autoloader for namespaced classes
spl_autoload_register(function($class) {
    $classFile = str_replace("\\", DIRECTORY_SEPARATOR, $class . '.php');
    $classPath = APP_ROOT . '/app/'. $classFile;
    if (file_exists($classPath)) {
        require_once($classPath);
    }
});
// echo $_SERVER['REQUEST_URI'];
// echo $_SERVER['REQUEST_METHOD'];
session_start();
// include_once 'app/services/Route.php';
use App\Services\Route;

$route = new Route();
require_once(APP_ROOT . '/routes/route.php');
Route::handle();